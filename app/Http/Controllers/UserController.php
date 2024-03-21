<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Contracts\UserServiceInterface;
use Illuminate\View\View;

final class UserController extends Controller
{
    public function __construct(
        private readonly UserServiceInterface $userService
    ) {
    }

    public function index(): View
    {
        $users = $this->userService->all();
        return view('admin.users.index', compact('users'));
    }

    public function show(User $user)
    {
        dump($user);
    }
}
