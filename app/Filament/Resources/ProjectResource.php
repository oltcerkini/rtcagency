<?php

namespace App\Filament\Resources;

use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'Projects';

    protected static ?int $navigationSort = 4;

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
                                    ->label('Project Title (English)'),
                                
                                Forms\Components\TextInput::make('slogan')
                                    ->required()
                                    ->maxLength(255)
                                    ->label('Tagline/Slogan (English)'),
                                
                                Forms\Components\TextInput::make('category')
                                    ->required()
                                    ->maxLength(100)
                                    ->label('Category (English)')
                                    ->default('Software solutions'),
                                
                                Forms\Components\RichEditor::make('description')
                                    ->required()
                                    ->label('Description (English)')
                                    ->columnSpanFull(),
                            ]),
                            
                        // German Tab
                        Forms\Components\Tabs\Tab::make('German')
                            ->icon('heroicon-o-flag')
                            ->schema([
                                Forms\Components\TextInput::make('title_german')
                                    ->maxLength(255)
                                    ->label('Project Title (German)')
                                    ->placeholder('Enter German translation'),
                                
                                Forms\Components\TextInput::make('slogan_german')
                                    ->maxLength(255)
                                    ->label('Tagline/Slogan (German)')
                                    ->placeholder('Enter German translation'),
                                
                                Forms\Components\TextInput::make('category_german')
                                    ->maxLength(100)
                                    ->label('Category (German)')
                                    ->placeholder('Enter German translation'),
                                
                                Forms\Components\RichEditor::make('description_german')
                                    ->label('Description (German)')
                                    ->placeholder('Enter German translation')
                                    ->columnSpanFull(),
                            ]),
                            
                        // French Tab
                        Forms\Components\Tabs\Tab::make('French')
                            ->icon('heroicon-o-flag')
                            ->schema([
                                Forms\Components\TextInput::make('title_french')
                                    ->maxLength(255)
                                    ->label('Project Title (French)')
                                    ->placeholder('Enter French translation'),
                                
                                Forms\Components\TextInput::make('slogan_french')
                                    ->maxLength(255)
                                    ->label('Tagline/Slogan (French)')
                                    ->placeholder('Enter French translation'),
                                
                                Forms\Components\TextInput::make('category_french')
                                    ->maxLength(100)
                                    ->label('Category (French)')
                                    ->placeholder('Enter French translation'),
                                
                                Forms\Components\RichEditor::make('description_french')
                                    ->label('Description (French)')
                                    ->placeholder('Enter French translation')
                                    ->columnSpanFull(),
                            ]),
                    ])->columnSpanFull(),
                
                Forms\Components\Section::make('Project Images')
                    ->schema([
                        Forms\Components\FileUpload::make('image_1')
                            ->label('Main Image (for cards)')
                            ->required()
                            ->image()
                            ->directory('projects')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend('project-main-'),
                            ),
                        
                        Forms\Components\FileUpload::make('image_2')
                            ->label('Secondary Image (for details page)')
                            ->required()
                            ->image()
                            ->directory('projects')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend('project-secondary-'),
                            ),
                    ])->columns(2),
                
                Forms\Components\Section::make('Settings')
                    ->schema([
                        Forms\Components\TextInput::make('order')
                            ->numeric()
                            ->default(0)
                            ->label('Sort Order')
                            ->helperText('Lower numbers appear first'),
                        
                        Forms\Components\Toggle::make('is_published')
                            ->label('Published')
                            ->default(true)
                            ->helperText('Show this project on the website'),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_1')
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
                
                Tables\Columns\TextColumn::make('category')
                    ->searchable()
                    ->sortable()
                    ->label('Category'),
                
                Tables\Columns\IconColumn::make('is_published')
                    ->label('Published')
                    ->boolean()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('order')
                    ->sortable()
                    ->label('Order'),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_published')
                    ->label('Published'),
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
            'index' => \App\Filament\Resources\ProjectResource\Pages\ListProjects::route('/'),
            'create' => \App\Filament\Resources\ProjectResource\Pages\CreateProject::route('/create'),
            'edit' => \App\Filament\Resources\ProjectResource\Pages\EditProject::route('/{record}/edit'),
        ];
    }
}