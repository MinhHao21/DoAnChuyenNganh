<?php

namespace App\Nova\Actions;

use App\Models\Lichcongtac;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Actions\DestructiveAction;
use Laravel\Nova\Fields\ActionFields;

class Copy extends DestructiveAction
{
    use InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        //
       
        if(count($models) > 1){
            foreach($models as $model){
                $Lichcongtac = new Lichcongtac();
                $Lichcongtac->noidung = $model->noidung;
                $Lichcongtac->diachi = $model->diachi;
                $Lichcongtac->thanhphan = $model->thanhphan;
                $Lichcongtac->giaymoi = $model->giaymoi;
                $Lichcongtac->dinhkem = $model->dinhkem;
                $Lichcongtac->dinhkem = $model->dinhkem;
                $Lichcongtac->tensukien = $model->tensukien;
                $Lichcongtac->uuid = $model->uuid;
                $Lichcongtac->ngay = $model->ngay;
                $Lichcongtac->trucbaove = $model->trucbaove;
                $Lichcongtac->save();
            }
        }else{
            foreach($models as $model){
                $Lichcongtac = new Lichcongtac();
                $Lichcongtac->noidung = $model->noidung;
                $Lichcongtac->diachi = $model->diachi;
                $Lichcongtac->thanhphan = $model->thanhphan;
                $Lichcongtac->giaymoi = $model->giaymoi;
                $Lichcongtac->dinhkem = $model->dinhkem;
                $Lichcongtac->dinhkem = $model->dinhkem;
                $Lichcongtac->tensukien = $model->tensukien;
                $Lichcongtac->uuid = $model->uuid;
                $Lichcongtac->ngay = $model->ngay;
                $Lichcongtac->trucbaove = $model->trucbaove;
                $Lichcongtac->save();
                $id = $model->id + 1;

                return Action::redirect('/nova/resources/lichcongtacs/'.$id.'/edit?viaResource&viaResourceId&viaRelationship');
            }
        }
        Log::error($id);
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [];
    }
}
