@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- Welcome Message -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-bold">Welcome to the Dashboard!</h3>
                    <p class="mt-2 text-sm">
                        Here, you can manage your account, view analytics, and explore recent activities.
                    </p>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-gray-100">Recent Activities</h3>
                    <ul class="mt-4 space-y-2">
                        <li class="p-4 bg-gray-50 dark:bg-gray-700 rounded-md">
                            <span class="font-semibold">Activity 1:</span> User A updated their profile.
                        </li>
                        <li class="p-4 bg-gray-50 dark:bg-gray-700 rounded-md">
                            <span class="font-semibold">Activity 2:</span> New order received from User B.
                        </li>
                        <li class="p-4 bg-gray-50 dark:bg-gray-700 rounded-md">
                            <span class="font-semibold">Activity 3:</span> System maintenance completed.
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Analytics Section -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-gray-100">Analytics Overview</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
                        <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-md shadow">
                            <h4 class="font-semibold">Total Users</h4>
                            <p class="mt-2 text-xl">1,250</p>
                        </div>
                        <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-md shadow">
                            <h4 class="font-semibold">Orders Today</h4>
                            <p class="mt-2 text-xl">45</p>
                        </div>
                        <div class="p-4 bg-gray-50 dark:bg-gray-700 rounded-md shadow">
                            <h4 class="font-semibold">Revenue</h4>
                            <p class="mt-2 text-xl">$8,560</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Placeholder for future content -->
            <div class="bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 p-6 shadow-sm sm:rounded-lg">
                <p>This section can be used for future expansions or custom components.</p>
            </div>
        </div>
    </div>
@endsection
