<?php

namespace App\Filament\Resources\FrontendSectionResource\Pages;

use App\Filament\Resources\FrontendSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFrontendSection extends ViewRecord
{
    protected static string $resource = FrontendSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
