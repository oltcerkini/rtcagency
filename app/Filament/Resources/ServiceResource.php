<?php

namespace App\Filament\Resources;

use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'Services';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Service Information')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->label('Service Title'),
                        
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->label('URL Slug')
                            ->helperText('URL-friendly version of title (e.g., translation-services)'),
                        
                        Forms\Components\Textarea::make('description')
                            ->rows(3)
                            ->label('Short Description')
                            ->helperText('Brief description for service cards'),
                        
                        Forms\Components\RichEditor::make('content')
                            ->label('Full Content')
                            ->columnSpanFull()
                            ->helperText('Detailed content for service detail page'),
                    ]),
                
                Forms\Components\Section::make('Service Media')
                    ->schema([
                        Forms\Components\TextInput::make('icon')
                            ->label('Icon Class (FontAwesome)')
                            ->placeholder('e.g., fas fa-language, fas fa-headset')
                            ->helperText('FontAwesome icon class for the service'),
                        
                        Forms\Components\FileUpload::make('image')
                            ->label('Service Image')
                            ->image()
                            ->directory('services')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->helperText('Main image for the service')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend('service-'),
                            ),
                    ]),
                
                Forms\Components\Section::make('Service Settings')
                    ->schema([
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0)
                            ->label('Sort Order')
                            ->helperText('Lower numbers appear first'),
                        
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true)
                            ->helperText('Show this service on the website'),
                        
                        Forms\Components\Toggle::make('featured')
                            ->label('Featured')
                            ->default(false)
                            ->helperText('Highlight as featured service'),
                    ])
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->circular()
                    ->size(40),
                
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(30),
                
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->sortable()
                    ->limit(20),
                
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),
                
                Tables\Columns\IconColumn::make('featured')
                    ->label('Featured')
                    ->boolean()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable()
                    ->label('Order'),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('sort_order')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active'),
                
                Tables\Filters\TernaryFilter::make('featured')
                    ->label('Featured'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\ServiceResource\Pages\ListServices::route('/'),
            'create' => \App\Filament\Resources\ServiceResource\Pages\CreateService::route('/create'),
            'edit' => \App\Filament\Resources\ServiceResource\Pages\EditService::route('/{record}/edit'),
        ];
    }
}