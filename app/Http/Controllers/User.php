<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Controller
{
    public function checkUser(Request $request)
    {
        $defaultSha256Password = '34250003024812';
        $defaultBcryptPassword = '123456789012345678901234567890123456789012345678901234567890123456789012';
        $user = $request->input('user');
        if ($user !== 'coscup2022') {
            return json_encode([
                'result' => 'Login is failed. User is wrong!',
                'result_tw' => '登入失敗, 使用者是錯的!',
            ]);
        }
        $password = $request->input('password');
        if ($password === $defaultSha256Password) {
            $resEnMessage = sprintf('It seems that you use the default password: %s. The login system doesn\'t like the default password. Please figure out another way :).', $defaultSha256Password);
            $resTwMessage = sprintf('登入系統不太喜歡預設密碼: %s，請試著想出其他方法登入 :)', $defaultSha256Password);
            return \json_encode([
                'result' => $resEnMessage,
                'result_tw' => $resTwMessage,
            ]);
        }
        if ($password === $defaultBcryptPassword) {
            $resEnMessage = sprintf('It seems that you use the default password: %s. The login system doesn\'t like the default password. Please figure out another way :).', $defaultBcryptPassword);
            $resTwMessage = sprintf('登入系統不太喜歡預設密碼: %s，請試著想出其他方法登入 :)', $defaultBcryptPassword);
            return \json_encode([
                'result' => $resEnMessage,
                'result_tw' => $resTwMessage,
            ]);
        }
        $shaAlg = 'sha256';
        $hashedPassword = \hash($shaAlg, $password);
        $defaultSha256HashedPassword = \hash($shaAlg, $defaultSha256Password);
        if ($hashedPassword == $defaultSha256HashedPassword) {
            $token = \bin2hex(\random_bytes(5));
            $res = [
                'result' => 'Hooray! You may know about the magic SHA256 Hash!',
                'result_tw' => '萬歲!你知道了 magic SHA256 Hash!',
                'token' => $token,
            ];

            DB::beginTransaction();
            DB::table('user')->insert(['token' => $token, 'type' => $shaAlg]);
            DB::commit();

            return \json_encode($res);
        }
        $defaultBcryptHashedPassword = Hash::make($defaultBcryptPassword);
        if (Hash::check($password, $defaultBcryptHashedPassword) === true) {
            $token = \bin2hex(\random_bytes(5));
            $res = [
                'result' => 'Hooray! You may know about the magic Bcrypt Hash!',
                'result_tw' => '萬歲!你知道了 magic Bcrypt Hash!',
                'token' => $token,
            ];

            DB::beginTransaction();
            DB::table('user')->insert(['token' => $token, 'type' => 'Bcrypt']);
            DB::commit();

            return \json_encode($res);
        }

        return json_encode([
            'result' => 'Login is failed!',
            'result_tw' => '登入失敗!',
        ]);
    }
}
