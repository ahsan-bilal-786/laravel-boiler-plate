<?php

namespace App\Http\Controllers\Attachment;

use App\Http\Controllers\Controller;
use App\Models\Attachment;

class AttachmentController extends Controller
{
    public function destroy($id)
    {
        Attachment::deleteAttachment($id);
        return ['status' => 'success'];
    }
}
