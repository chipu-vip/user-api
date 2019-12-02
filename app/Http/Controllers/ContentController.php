<?php

namespace App\Http\Controllers;
use App\Models\Contents;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $messageCode = $request->input('message_code') ?? null;
        $messageType = $request->input('message_type') ?? null;

        if ( $messageCode === null || $messageType === null) {
            return response()->json([]);
        }

        
        $contents = Contents::where('message_code', $messageCode)
                            ->where('message_type', $messageType)
                            ->get();

        $result = [];
        if (count($contents) > 0 ) {
            foreach($contents as $content) {
                $result[] = ['id' => $content->id, 'content' => $content->content];
            }
        }
        return response()->json($result);
    }
}
