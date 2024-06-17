<?php

namespace App\Http\Controllers\ClassManagement;

use App\Http\Controllers\Controller;
use App\Models\Attachment;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttachmentController extends Controller
{
    //Create an attachment
    public function createAttachment(Request $request){
        $user = Auth::user();
        if($user->role !== 'faculty'){
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $validated = $request->validate([
            'attachment_name' => 'required|string',
            'module_name' => 'required|string',
            'attachment_path' => 'required|string',
            'attachment_type' => 'required|string',
        ]);

        //Get the module details
        $module = Module::where('name', $validated['module_name'])->first();

        //Create the attachment
        $attachment = Attachment::create([
            'faculty_id' => $user->id,
            'module_id' => $module->id,
            'attachment_name' => $validated['attachment_name'],
            'attachment_url' => $validated['attachment_url'],
            'attachment_type' => $validated['attachment_type'],
        ]);

        return response()->json(['message' => 'Attachment created successfully'], 200);
    }

}
