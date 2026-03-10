<!--<div class="side_bar_menu">
    <div class="head">
        <div class="user_logo">
            <?php //echo $userInfo[0]["name"][0]; ?>
</div>
        <p class="username">
             <?php// echo $userInfo[0]["name"]; ?>
        </p>
    </div>
   <a href="dashboard?src=greet"><i class="fas fa-home"></i> home</a>
   <a href="dashboard?src=account_settings"><i class="fas fa-user"></i> profile</a>
   <a href="dashboard?src=store_settings"><i class="fas fa-store"></i> stores</a>
   <a href="dashboard?src=store_manager"> store manager</a>
   <a href="dashboard?src=categories"> categories</a>
</div>-->


<div class="side_bar_menu bg-slate-900 text-slate-300 border-r border-slate-800 antialiased shadow-xl">
    <div class="head p-6 border-b border-slate-800 mb-4">
        <div class="user_logo w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-100 to-purple-600 text-white font-black text-xl flex items-center justify-center shadow-lg shadow-indigo-500/20 uppercase tracking-tighter">
            <?php echo $userInfo[0]["name"][0]; ?>
        </div>
        <p class="username mt-3 text-white font-bold tracking-tight text-lg">
             <?php echo $userInfo[0]["name"]; ?>
        </p>
    </div>

    <a href="dashboard?src=greet" class="link block px-6 py-3.5 mx-2 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/50 hover:pl-8 transition-all duration-300 group">
        <i class="fas fa-home mr-3 text-indigo-500 group-hover:scale-110 transition-transform"></i> home
    </a>
    
    <a href="dashboard?src=account_settings" class="link block px-6 py-3.5 mx-2 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/50 hover:pl-8 transition-all duration-300 group">
        <i class="fas fa-user mr-3 text-slate-500 group-hover:text-indigo-400 transition-colors"></i> profile
    </a>
    
    <a href="dashboard?src=store_settings" class="link block px-6 py-3.5 mx-2 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/50 hover:pl-8 transition-all duration-300 group">
        <i class="fas fa-store mr-3 text-slate-500 group-hover:text-indigo-400 transition-colors"></i> stores
    </a>
    
    <a href="dashboard?src=store_manager" class="link block px-6 py-3.5 mx-2 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/50 hover:pl-8 transition-all duration-300 group">
        <i class="fas fa-tasks mr-3 text-slate-500 group-hover:text-indigo-400 transition-colors"></i> store manager
    </a>
    
    <a href="dashboard?src=categories" class="link block px-6 py-3.5 mx-2 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/50 hover:pl-8 transition-all duration-300 group">
        <i class="fas fa-tags mr-3 text-slate-500 group-hover:text-indigo-400 transition-colors"></i> categories
    </a>
</div>