<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    public function checkUser(Request $request)
    {
        $defaultSha224Password = '34250003024812';
        $defaultBcryptPassword = '123456789012345678901234567890123456789012345678901234567890123456789012';
        $user = $request->input('user');
        $password = $request->input('password');
        if ($password === $defaultSha224Password) {
            $resEnMessage = sprintf('It seems that you use the default password: %s. The login system doesn\'t like the default password. Please figure out another way :).', $defaultSha224Password);
            $resTwMessage = sprintf('登入系統不太喜歡預設密碼: %s，請試著想出其他方法登入 :)', $defaultSha224Password);
            return json_encode([
                'result' => $resEnMessage,
                'result_tw' => $resTwMessage,
            ]);
        }
        if ($password === $defaultBcryptPassword) {
            $resEnMessage = sprintf('It seems that you use the default password: %s. The login system doesn\'t like the default password. Please figure out another way :).', $defaultBcryptPassword);
            $resTwMessage = sprintf('登入系統不太喜歡預設密碼: %s，請試著想出其他方法登入 :)', $defaultBcryptPassword);
            return json_encode([
                'result' => $resEnMessage,
                'result_tw' => $resTwMessage,
            ]);
        }

        $prepared = [$user];
        $res = DB::select('select user, hashed_password from users where user= = ?', $prepared);

        return $res;
    }
}
