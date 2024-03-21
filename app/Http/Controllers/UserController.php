<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Services\UserService;
use Illuminate\View\View;

final class UserController extends Controller
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository,
        private readonly UserService $userService
    ) {
    }

    public function index(): View
    {
        $users = $this->userRepository->all();
        return view('admin.users.index', compact('users'));
    }

    public function show(User $user)
    {
        dump($user);
    }
}
