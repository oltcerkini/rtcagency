<?php

namespace App\Filament\Resources;

use App\Models\Feature;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class FeatureResource extends Resource
{
    protected static ?string $model = Feature::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'Features';

    protected static ?int $navigationSort = 3;

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
                                Forms\Components\Section::make('Main Feature Content')
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->required()
                                            ->maxLength(255)
                                            ->label('Main Title (English)'),
                                        
                                        Forms\Components\Textarea::make('description')
                                            ->required()
                                            ->rows(3)
                                            ->label('Main Description (English)'),
                                    ]),
                                
                                Forms\Components\Section::make('Bullet Point 1 (English)')
                                    ->schema([
                                        Forms\Components\TextInput::make('bullet_title_1')
                                            ->required()
                                            ->maxLength(100)
                                            ->label('Title'),
                                        
                                        Forms\Components\Textarea::make('bullet_description_1')
                                            ->required()
                                            ->rows(2)
                                            ->label('Description'),
                                    ]),
                                
                                Forms\Components\Section::make('Bullet Point 2 (English)')
                                    ->schema([
                                        Forms\Components\TextInput::make('bullet_title_2')
                                            ->required()
                                            ->maxLength(100)
                                            ->label('Title'),
                                        
                                        Forms\Components\Textarea::make('bullet_description_2')
                                            ->required()
                                            ->rows(2)
                                            ->label('Description'),
                                    ]),
                                
                                Forms\Components\Section::make('Bullet Point 3 (English)')
                                    ->schema([
                                        Forms\Components\TextInput::make('bullet_title_3')
                                            ->required()
                                            ->maxLength(100)
                                            ->label('Title'),
                                        
                                        Forms\Components\Textarea::make('bullet_description_3')
                                            ->required()
                                            ->rows(2)
                                            ->label('Description'),
                                    ]),
                            ]),
                            
                        // German Tab
                        Forms\Components\Tabs\Tab::make('German')
                            ->icon('heroicon-o-flag')
                            ->schema([
                                Forms\Components\Section::make('Hauptinhalt (Deutsch)')
                                    ->schema([
                                        Forms\Components\TextInput::make('title_german')
                                            ->maxLength(255)
                                            ->label('Haupttitel (Deutsch)')
                                            ->placeholder('Enter German translation'),
                                        
                                        Forms\Components\Textarea::make('description_german')
                                            ->rows(3)
                                            ->label('Hauptbeschreibung (Deutsch)')
                                            ->placeholder('Enter German translation'),
                                    ]),
                                
                                Forms\Components\Section::make('Aufzählungspunkt 1 (Deutsch)')
                                    ->schema([
                                        Forms\Components\TextInput::make('bullet_title_1_german')
                                            ->maxLength(100)
                                            ->label('Titel')
                                            ->placeholder('Enter German translation'),
                                        
                                        Forms\Components\Textarea::make('bullet_description_1_german')
                                            ->rows(2)
                                            ->label('Beschreibung')
                                            ->placeholder('Enter German translation'),
                                    ]),
                                
                                Forms\Components\Section::make('Aufzählungspunkt 2 (Deutsch)')
                                    ->schema([
                                        Forms\Components\TextInput::make('bullet_title_2_german')
                                            ->maxLength(100)
                                            ->label('Titel')
                                            ->placeholder('Enter German translation'),
                                        
                                        Forms\Components\Textarea::make('bullet_description_2_german')
                                            ->rows(2)
                                            ->label('Beschreibung')
                                            ->placeholder('Enter German translation'),
                                    ]),
                                
                                Forms\Components\Section::make('Aufzählungspunkt 3 (Deutsch)')
                                    ->schema([
                                        Forms\Components\TextInput::make('bullet_title_3_german')
                                            ->maxLength(100)
                                            ->label('Titel')
                                            ->placeholder('Enter German translation'),
                                        
                                        Forms\Components\Textarea::make('bullet_description_3_german')
                                            ->rows(2)
                                            ->label('Beschreibung')
                                            ->placeholder('Enter German translation'),
                                    ]),
                            ]),
                            
                        // French Tab
                        Forms\Components\Tabs\Tab::make('French')
                            ->icon('heroicon-o-flag')
                            ->schema([
                                Forms\Components\Section::make('Contenu principal (Français)')
                                    ->schema([
                                        Forms\Components\TextInput::make('title_french')
                                            ->maxLength(255)
                                            ->label('Titre principal (Français)')
                                            ->placeholder('Enter French translation'),
                                        
                                        Forms\Components\Textarea::make('description_french')
                                            ->rows(3)
                                            ->label('Description principale (Français)')
                                            ->placeholder('Enter French translation'),
                                    ]),
                                
                                Forms\Components\Section::make('Point de puce 1 (Français)')
                                    ->schema([
                                        Forms\Components\TextInput::make('bullet_title_1_french')
                                            ->maxLength(100)
                                            ->label('Titre')
                                            ->placeholder('Enter French translation'),
                                        
                                        Forms\Components\Textarea::make('bullet_description_1_french')
                                            ->rows(2)
                                            ->label('Description')
                                            ->placeholder('Enter French translation'),
                                    ]),
                                
                                Forms\Components\Section::make('Point de puce 2 (Français)')
                                    ->schema([
                                        Forms\Components\TextInput::make('bullet_title_2_french')
                                            ->maxLength(100)
                                            ->label('Titre')
                                            ->placeholder('Enter French translation'),
                                        
                                        Forms\Components\Textarea::make('bullet_description_2_french')
                                            ->rows(2)
                                            ->label('Description')
                                            ->placeholder('Enter French translation'),
                                    ]),
                                
                                Forms\Components\Section::make('Point de puce 3 (Français)')
                                    ->schema([
                                        Forms\Components\TextInput::make('bullet_title_3_french')
                                            ->maxLength(100)
                                            ->label('Titre')
                                            ->placeholder('Enter French translation'),
                                        
                                        Forms\Components\Textarea::make('bullet_description_3_french')
                                            ->rows(2)
                                            ->label('Description')
                                            ->placeholder('Enter French translation'),
                                    ]),
                            ]),
                    ])->columnSpanFull(),
                
                Forms\Components\Section::make('Media & Icons')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Feature Image')
                            ->image()
                            ->directory('features')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend('feature-'),
                            ),
                        
                        Forms\Components\TextInput::make('icon_1')
                            ->label('Icon 1 Class')
                            ->default('icon-advertising')
                            ->helperText('CSS icon class name for bullet 1'),
                        
                        Forms\Components\TextInput::make('icon_2')
                            ->label('Icon 2 Class')
                            ->default('icon-app')
                            ->helperText('CSS icon class name for bullet 2'),
                        
                        Forms\Components\TextInput::make('icon_3')
                            ->label('Icon 3 Class')
                            ->default('icon-analytics')
                            ->helperText('CSS icon class name for bullet 3'),
                    ])
                    ->columns(2),
                
                Forms\Components\Section::make('Settings')
                    ->schema([
                        Forms\Components\TextInput::make('order')
                            ->numeric()
                            ->default(0)
                            ->label('Order'),
                        
                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
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
                
                Tables\Columns\TextColumn::make('bullet_title_1')
                    ->label('Bullet 1')
                    ->limit(20),
                
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('order')
                    ->sortable(),
            ])
            ->defaultSort('order')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Active'),
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

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\FeatureResource\Pages\ListFeatures::route('/'),
            'create' => \App\Filament\Resources\FeatureResource\Pages\CreateFeature::route('/create'),
            'edit' => \App\Filament\Resources\FeatureResource\Pages\EditFeature::route('/{record}/edit'),
        ];
    }
}