<?php

namespace App\Filament\Resources\FrontendSectionResource\Pages;

use App\Filament\Resources\FrontendSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFrontendSection extends EditRecord
{
    protected static string $resource = FrontendSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
