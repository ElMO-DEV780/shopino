<!--<div class="greet container">
    <div class="content">
 <div class="greeting">
        <h1>
    <?php
   // echo "welcome! {$userInfo[0]["name"]} 🖐️";
    ?>
        </h1>
    </div>
    <div class="info">
        <p>
            <i class="fas fa-clock"></i>
            <?php// echo "date joined <span class='date_joined'>{$userInfo[0]["creation_date"]}</span>." ?>
        </p>
        <p>
             <i class="fas fa-user"></i>
            <?php// echo "your account is <span class='account_status'>{$userInfo[0]["account_status"]}</span>." ?>
        </p>
    </div>


<h3>last selles: </h3>
<p>you have sell a phone in {store name}</p>
<div>
    <h3>create your store now</h3>
    <a href="dashboard?src=store_settings">create store</a>
</div>
    </div>
</div>-->

<div class="container min-h-screen bg-gray-50 py-8 px-4 sm:px-6 lg:px-8 font-sans text-gray-900">
    <div class="max-w-3xl mx-auto">
        
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
            
            <div class="p-6 sm:p-8 border-b border-gray-100 bg-gradient-to-r from-white to-gray-50">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 flex items-center gap-3">
                    <?php echo "Welcome, {$userInfo[0]["name"]} 🖐️"; ?>
                </h1>
                
                <div class="mt-4 flex flex-wrap gap-4 text-sm text-gray-500">
                    <div class="flex items-center gap-2 bg-gray-100 px-3 py-1.5 rounded-full">
                        <i class="fas fa-clock text-blue-500"></i>
                        <span>Date joined: <span class="font-semibold text-gray-700 underline decoration-blue-200 underline-offset-2"><?php echo $userInfo[0]["creation_date"]; ?></span></span>
                    </div>
                    <div class="flex items-center gap-2 bg-gray-100 px-3 py-1.5 rounded-full">
                        <i class="fas fa-user text-green-500"></i>
                        <span>Status: <span class="font-semibold text-green-600 uppercase tracking-wide text-xs italic"><?php echo $userInfo[0]["account_status"]; ?></span></span>
                    </div>
                </div>
            </div>

            <div class="p-6 sm:p-8 space-y-8">
                
                <section>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-gray-400 mb-4 flex items-center gap-2">
                        <i class="fas fa-chart-line"></i> Last Sales
                    </h3>
                    <div class="bg-blue-50 border border-blue-100 rounded-xl p-4 flex items-start gap-4">
                        <div class="bg-blue-500 p-2 rounded-lg text-white">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div>
                            <p class="text-blue-900 font-medium">You sold a phone</p>
                            <p class="text-blue-700 text-sm opacity-80 italic">at {store name}</p>
                        </div>
                    </div>
                </section>

                <hr class="border-gray-100">

                <section class="bg-indigo-600 rounded-xl p-6 text-center sm:text-left sm:flex items-center justify-between gap-6 transition-all hover:shadow-lg hover:shadow-indigo-100">
                    <div>
                        <h3 class="text-white font-bold text-lg mb-1">Create your store now</h3>
                        <p class="text-indigo-100 text-sm">Start selling and managing your inventory today.</p>
                    </div>
                    <a href="dashboard?src=store_settings" class="mt-4 sm:mt-0 inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-indigo-600 bg-white hover:bg-indigo-50 transition-colors shadow-sm">
                        Create Store
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </section>
                
            </div>
        </div>
        
    </div>
</div>
