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
                Forms\Components\Section::make('Main Feature Content')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->label('Main Title'),
                        
                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->rows(3)
                            ->label('Main Description'),
                        
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
                    ]),
                
                Forms\Components\Section::make('Bullet Point 1')
                    ->schema([
                        Forms\Components\TextInput::make('bullet_title_1')
                            ->required()
                            ->maxLength(100)
                            ->label('Title'),
                        
                        Forms\Components\Textarea::make('bullet_description_1')
                            ->required()
                            ->rows(2)
                            ->label('Description'),
                        
                        Forms\Components\TextInput::make('icon_1')
                            ->label('Icon Class')
                            ->default('icon-advertising')
                            ->helperText('CSS icon class name'),
                    ]),
                
                Forms\Components\Section::make('Bullet Point 2')
                    ->schema([
                        Forms\Components\TextInput::make('bullet_title_2')
                            ->required()
                            ->maxLength(100)
                            ->label('Title'),
                        
                        Forms\Components\Textarea::make('bullet_description_2')
                            ->required()
                            ->rows(2)
                            ->label('Description'),
                        
                        Forms\Components\TextInput::make('icon_2')
                            ->label('Icon Class')
                            ->default('icon-app')
                            ->helperText('CSS icon class name'),
                    ]),
                
                Forms\Components\Section::make('Bullet Point 3')
                    ->schema([
                        Forms\Components\TextInput::make('bullet_title_3')
                            ->required()
                            ->maxLength(100)
                            ->label('Title'),
                        
                        Forms\Components\Textarea::make('bullet_description_3')
                            ->required()
                            ->rows(2)
                            ->label('Description'),
                        
                        Forms\Components\TextInput::make('icon_3')
                            ->label('Icon Class')
                            ->default('icon-analytics')
                            ->helperText('CSS icon class name'),
                    ]),
                
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
                    ->searchable()
                    ->sortable()
                    ->limit(30),
                
                Tables\Columns\TextColumn::make('bullet_title_1')
                    ->label('Bullet 1')
                    ->limit(20),
                
                Tables\Columns\TextColumn::make('bullet_title_2')
                    ->label('Bullet 2')
                    ->limit(20),
                
                Tables\Columns\TextColumn::make('bullet_title_3')
                    ->label('Bullet 3')
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