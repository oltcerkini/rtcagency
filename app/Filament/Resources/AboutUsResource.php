<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutUsResource\Pages;
use App\Models\AboutUs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class AboutUsResource extends Resource
{
    protected static ?string $model = AboutUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationGroup = 'Content';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('Translations')
                    ->tabs([
                        // English Tab
                        Forms\Components\Tabs\Tab::make('English')
                            ->icon('heroicon-o-flag')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->maxLength(255)
                                    ->label('Title (English)')
                                    ->columnSpanFull(),
                                    
                                Forms\Components\RichEditor::make('description1')
                                    ->required()
                                    ->label('First Description (English)')
                                    ->toolbarButtons([
                                        'bold', 'italic', 'underline', 'strike',
                                        'blockquote', 'bulletList', 'orderedList', 'link',
                                    ])
                                    ->fileAttachmentsDirectory('about-us')
                                    ->columnSpanFull(),
                                    
                                Forms\Components\RichEditor::make('description2')
                                    ->required()
                                    ->label('Second Description (English)')
                                    ->toolbarButtons([
                                        'bold', 'italic', 'underline', 'strike',
                                        'blockquote', 'bulletList', 'orderedList', 'link',
                                    ])
                                    ->fileAttachmentsDirectory('about-us')
                                    ->columnSpanFull(),
                            ]),
                            
                        // German Tab
                        Forms\Components\Tabs\Tab::make('German')
                            ->icon('heroicon-o-flag')
                            ->schema([
                                Forms\Components\TextInput::make('title_german')
                                    ->maxLength(255)
                                    ->label('Title (German)')
                                    ->placeholder('Enter German translation')
                                    ->columnSpanFull(),
                                    
                                Forms\Components\RichEditor::make('description1_german')
                                    ->label('First Description (German)')
                                    ->toolbarButtons([
                                        'bold', 'italic', 'underline', 'strike',
                                        'blockquote', 'bulletList', 'orderedList', 'link',
                                    ])
                                    ->fileAttachmentsDirectory('about-us')
                                    ->placeholder('Enter German translation')
                                    ->columnSpanFull(),
                                    
                                Forms\Components\RichEditor::make('description2_german')
                                    ->label('Second Description (German)')
                                    ->toolbarButtons([
                                        'bold', 'italic', 'underline', 'strike',
                                        'blockquote', 'bulletList', 'orderedList', 'link',
                                    ])
                                    ->fileAttachmentsDirectory('about-us')
                                    ->placeholder('Enter German translation')
                                    ->columnSpanFull(),
                            ]),
                            
                        // French Tab
                        Forms\Components\Tabs\Tab::make('French')
                            ->icon('heroicon-o-flag')
                            ->schema([
                                Forms\Components\TextInput::make('title_french')
                                    ->maxLength(255)
                                    ->label('Title (French)')
                                    ->placeholder('Enter French translation')
                                    ->columnSpanFull(),
                                    
                                Forms\Components\RichEditor::make('description1_french')
                                    ->label('First Description (French)')
                                    ->toolbarButtons([
                                        'bold', 'italic', 'underline', 'strike',
                                        'blockquote', 'bulletList', 'orderedList', 'link',
                                    ])
                                    ->fileAttachmentsDirectory('about-us')
                                    ->placeholder('Enter French translation')
                                    ->columnSpanFull(),
                                    
                                Forms\Components\RichEditor::make('description2_french')
                                    ->label('Second Description (French)')
                                    ->toolbarButtons([
                                        'bold', 'italic', 'underline', 'strike',
                                        'blockquote', 'bulletList', 'orderedList', 'link',
                                    ])
                                    ->fileAttachmentsDirectory('about-us')
                                    ->placeholder('Enter French translation')
                                    ->columnSpanFull(),
                            ]),
                    ])->columnSpanFull(),
                    
                Forms\Components\Section::make('Images')
                    ->schema([
                        Forms\Components\FileUpload::make('image1')
                            ->label('First Image')
                            ->image()
                            ->directory('about-us')
                            ->preserveFilenames()
                            ->columnSpan(1),
                            
                        Forms\Components\FileUpload::make('image2')
                            ->label('Second Image')
                            ->image()
                            ->directory('about-us')
                            ->preserveFilenames()
                            ->columnSpan(1),
                    ])->columns(2),
                    
                Forms\Components\Section::make('Settings')
                    ->schema([
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                            
                        Forms\Components\Toggle::make('is_active')
                            ->required()
                            ->default(true)
                            ->label('Active'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image1')
                    ->label('Image')
                    ->circular()
                    ->size(50),
                    
                Tables\Columns\TextColumn::make('title')
                    ->label('English Title')
                    ->searchable()
                    ->sortable()
                    ->limit(30),
                    
                Tables\Columns\TextColumn::make('title_german')
                    ->label('German Title')
                    ->searchable()
                    ->sortable()
                    ->limit(30)
                    ->toggleable(isToggledHiddenByDefault: true),
                    
                Tables\Columns\TextColumn::make('title_french')
                    ->label('French Title')
                    ->searchable()
                    ->sortable()
                    ->limit(30)
                    ->toggleable(isToggledHiddenByDefault: true),
                    
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->sortable()
                    ->label('Active'),
                    
                Tables\Columns\TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable()
                    ->label('Order'),
            ])
            ->filters([
                Tables\Filters\Filter::make('is_active')
                    ->query(fn ($query) => $query->where('is_active', true))
                    ->label('Only Active'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order', 'asc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutUs::route('/'),
            'create' => Pages\CreateAboutUs::route('/create'),
            'edit' => Pages\EditAboutUs::route('/{record}/edit'),
        ];
    }
}