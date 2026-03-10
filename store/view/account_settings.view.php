<!--<div class="account_settings container">
    <div class="content">
        <p><i class="fas fa-user"></i>name: <span><?php //echo $userInfo[0]["name"];?></span></p>
    <p>email: <span><?php //echo $userInfo[0]["email"];?></span></p>
    <p>account status: <span> <?php //echo $userInfo[0]["account_status"];?></span></p>
    <h3>edit your info</h3>
    <div>
        <div class="edit_info">
            <h4>change email</h4>
             <form action="" method="POST">
            <label for=""><i class="fas fa-envelope"></i> email</label>
            <input type="email" name="email" placeholder="email">
            <input type="submit" name="change_email" value="change email">
            <?php //echo $change_email_message; ?>
        </form>
        </div>

        <div class="edit_info">
            <h4>change password</h4>
            <form action="" method="POST">
            <label for=""><i class="fas fa-lock"></i> password</label>
            <input type="password" name="old_pass" placeholder="password">
            <label for=""><i class="fas fa-lock"></i> new password</label>
            <input type="password" name="new_pass" placeholder="new password">
            <label for=""><i class="fas fa-lock"></i> confirm new password</label>
            <input type="password" name="confirmed_pass" placeholder="confirm new password">
            <input type="submit" name="change_password" value="change password">
             <?php //echo $change_password_message; ?>
        </form>
        
    </div>
    <form action="" method="POST">
        <input type="submit" name="logout" value="logout">
    </form>
    </div>
</div>-->

<div class="container min-h-screen bg-gray-50 py-10 px-4 sm:px-6 lg:px-8 font-sans">
    <div class="max-w-2xl mx-auto space-y-6">
        
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                <i class="fas fa-id-card text-indigo-500"></i> Account Settings
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="flex flex-col">
                    <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Full Name</span>
                    <p class="text-gray-700 font-medium flex items-center gap-2">
                        <i class="fas fa-user text-gray-400"></i> <?php echo $userInfo[0]["name"];?>
                    </p>
                </div>
                <div class="flex flex-col">
                    <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Email Address</span>
                    <p class="text-gray-700 font-medium break-all"><?php echo $userInfo[0]["email"];?></p>
                </div>
                <div class="flex flex-col">
                    <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">Status</span>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium bg-green-100 text-green-800 self-start">
                        <?php echo $userInfo[0]["account_status"];?>
                    </span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-200 divide-y divide-gray-100">
            <div class="p-6">
                <h3 class="text-lg font-bold text-gray-800 mb-4">Edit your info</h3>
                
                <div class="mb-10">
                    <h4 class="text-sm font-semibold text-gray-500 mb-3 uppercase tracking-tight">Change Email</h4>
                    <form action="" method="POST" class="flex flex-col sm:flex-row gap-3">
                        <div class="relative flex-grow">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                                <i class="fas fa-envelope text-sm"></i>
                            </span>
                            <input type="email" name="email" placeholder="New email address" 
                                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all">
                        </div>
                        <input type="submit" name="change_email" value="Update Email" 
                            class="cursor-pointer px-6 py-2 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 transition-colors shadow-sm">
                    </form>
                    <div class="mt-2 text-sm">
                        <?php echo $change_email_message; ?>
                    </div>
                </div>

                <div>
                    <h4 class="text-sm font-semibold text-gray-500 mb-3 uppercase tracking-tight">Security & Password</h4>
                    <form action="" method="POST" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1">
                                <label class="text-xs font-medium text-gray-600 ml-1">Current Password</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400"><i class="fas fa-lock text-sm"></i></span>
                                    <input type="password" name="old_pass" placeholder="••••••••" 
                                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                                </div>
                            </div>
                            <div class="space-y-1 sm:col-start-1">
                                <label class="text-xs font-medium text-gray-600 ml-1">New Password</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400"><i class="fas fa-key text-sm"></i></span>
                                    <input type="password" name="new_pass" placeholder="••••••••" 
                                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                                </div>
                            </div>
                            <div class="space-y-1">
                                <label class="text-xs font-medium text-gray-600 ml-1">Confirm New Password</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400"><i class="fas fa-check-circle text-sm"></i></span>
                                    <input type="password" name="confirmed_pass" placeholder="••••••••" 
                                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="change_password" value="Update Password" 
                            class="cursor-pointer w-full sm:w-auto px-8 py-2.5 bg-gray-800 text-white font-semibold rounded-lg hover:bg-black transition-colors">
                    </form>
                    <div class="mt-2 text-sm">
                        <?php echo $change_password_message; ?>
                    </div>
                </div>
            </div>

            <div class="p-6 bg-gray-50 flex items-center justify-between rounded-b-xl">
                <p class="text-sm text-gray-500 italic">Finish your session?</p>
                <form action="" method="POST">
                    <button type="submit" name="logout" value="logout" class="flex items-center gap-2 text-red-600 font-bold hover:text-red-700 transition-colors">
                        <i class="fas fa-sign-out-alt"></i> Logout Account
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>