<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;
use Response;
use Str;

/**
 * Class UserApiController
 * @package App\Http\Controllers\Api\V1\Admin
 */
class UserApiController extends Controller
{
    /**
     * Undocumented function
     *
     * @param UserRequest $request
     * @return JsonResponse
     */
    public function store(UserRequest $request)
    {
        $User = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'avatar' => "users/default.png",
            'role_id ' => 2,
        ]);
        // if ($request->input('avatar', false)) {
        //     $User->addMedia(storage_path('tmp/uploads/' . $request->input('avatar')))->toMediaCollection('avatar');
        // }

        $User->api_token = Str::random(60);
        $User->save();
        $data = [
            'user' => $User,
        ];
        return Response::json(['success' => $data], 200);

        // return ([
        //     'user' => $User,
        //     'api_token' => $User->api_token,
        // ])
        //     ->response()
        //     ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * @param Request $Request
     * @return JsonResponse
     */
    public function login(Request $Request)
    {

        if (isset($Request->email)) {
            $User = User::where('email', $Request->email)->get();
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
        if (count($User) > 0 && count($User) < 2) {
            if (isset($Request->password)) {
                if (!Hash::check($User[0]->password, $Request->password)) {
                    $User = $User[0];
                    $data = [
                        'user' => $User,
                    ];
                    return Response::json(['success' => $data], 200);

                } else {
                    return response()->json(['error' => 'Unauthorised'], 401);
                }
            }
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

}
