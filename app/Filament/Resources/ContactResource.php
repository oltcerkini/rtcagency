<?php

namespace App\Filament\Resources;

use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $navigationGroup = 'Communication';
    protected static ?string $recordTitleAttribute = 'name';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('subject')
                    ->maxLength(255),
                Forms\Components\Textarea::make('message')
                    ->required()
                    ->rows(5),
                Forms\Components\DateTimePicker::make('read_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable()
                    ->label('ID'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subject')
                    ->searchable()
                    ->limit(30),
                Tables\Columns\IconColumn::make('read_at')
                    ->label('Read')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Received')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('unread')
                    ->query(fn (Builder $query): Builder => $query->whereNull('read_at'))
                    ->label('Unread Messages'),
                Tables\Filters\SelectFilter::make('read_status')
                    ->options([
                        'read' => 'Read',
                        'unread' => 'Unread',
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return match ($data['value'] ?? null) {
                            'read' => $query->whereNotNull('read_at'),
                            'unread' => $query->whereNull('read_at'),
                            default => $query,
                        };
                    }),
            ])
            ->actions([
               Tables\Actions\ViewAction::make()
                    ->modalHeading(fn (Contact $record): string => "Message from {$record->name}")
                    ->modalContent(function (Contact $record) {
                        return view('filament.contact-details', ['contact' => $record]);
                    })
                    ->modalWidth('lg')
                    ->action(function (Contact $record) {
                        if (!$record->read_at) {
                            $record->update(['read_at' => now()]);
                        }
                    }),
                Tables\Actions\Action::make('markAsRead')
                    ->action(function (Contact $record) {
                        $record->update(['read_at' => now()]);
                    })
                    ->requiresConfirmation()
                    ->modalHeading('Mark as Read')
                    ->modalSubheading('Are you sure you want to mark this message as read?')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->hidden(fn (Contact $record): bool => $record->read_at !== null),
                Tables\Actions\Action::make('markAsUnread')
                    ->action(function (Contact $record) {
                        $record->update(['read_at' => null]);
                    })
                    ->requiresConfirmation()
                    ->modalHeading('Mark as Unread')
                    ->modalSubheading('Are you sure you want to mark this message as unread?')
                    ->icon('heroicon-o-x-circle')
                    ->color('warning')
                    ->visible(fn (Contact $record): bool => $record->read_at !== null),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\BulkAction::make('markAsRead')
                    ->action(function ($records) {
                        $records->each(function ($record) {
                            $record->update(['read_at' => now()]);
                        });
                    })
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->deselectRecordsAfterCompletion(),
                Tables\Actions\BulkAction::make('markAsUnread')
                    ->action(function ($records) {
                        $records->each(function ($record) {
                            $record->update(['read_at' => null]);
                        });
                    })
                    ->icon('heroicon-o-x-circle')
                    ->color('warning')
                    ->deselectRecordsAfterCompletion(),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\ContactResource\Pages\ListContacts::route('/'),
            'create' => \App\Filament\Resources\ContactResource\Pages\CreateContact::route('/create'),
            'edit' => \App\Filament\Resources\ContactResource\Pages\EditContact::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'email', 'phone', 'subject', 'message'];
    }

    public static function getGlobalSearchResultDetails(Model $record): array
    {
        return [
            'Email' => $record->email,
            'Subject' => $record->subject,
        ];
    }
}