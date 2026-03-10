<!--<div class="store_settings container">
<hr>
<h1>stores settings: </h1>
<h4>add store</h4>
<form action="" method="post">
    <input type="text" name="store_name" placeholder="store name">
    <textarea name="store_description" placeholder="store secreption"></textarea>
    <select name="store_theme">
        <option value="">theme</option>
        <option value="default">default</option>
    </select>
    <select name="country">
        <option value="">country</option>
        <option value="morroco">morroco</option>
        <option value="united states">united states</option>
    </select>
    <input type="text" name="address" placeholder="address">
    <input type="submit" name="add_store" value="add store">
</form>
<?php //echo $add_store_message; ?>
<hr>
<div>
    <h4>all active stores: (<?php// echo $stores_count; ?>) </h4>
    <?php
   // foreach($storeInfo as $store) { ?>
    <div>
      <p>store name: <?php// echo $store["store_name"]; ?> </p>
      <p>date creation:  <?php //echo $store["creation_date"]; ?></p>
      <p>store theme: <?php //echo $store["store_theme"]; ?></p>
      <p>products count: 10</p>
    </div>
    <form action="" method="POST">
      <input type="submit" value="delete" name="delete_store">
      <input type="submit" value="manage" name="manage_store">
      <input type="hidden" name="store_id" value="<?php //echo $store["id"]; ?>">
    </form>
    <p>your store link: <?php //echo $_SERVER["HTTP_HOST"]."/store/".$store["store_name"]; ?></p>
</div>
<?php
   // }
?>
</div>
-->


<div class="container min-h-screen bg-gray-50 py-10 px-4 sm:px-6 lg:px-8 font-sans">
    <div class="max-w-4xl mx-auto space-y-12">
        
        <section class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="p-6 border-b border-gray-100 bg-white">
                <h1 class="text-2xl font-bold text-gray-800 flex items-center gap-2">
                    <i class="fas fa-store text-indigo-600"></i> Store Settings
                </h1>
                <p class="text-gray-500 text-sm mt-1">Create and manage your digital storefronts.</p>
            </div>

            <div class="p-6 sm:p-8">
                <h4 class="text-lg font-semibold text-gray-700 mb-6">Add New Store</h4>
                <form action="" method="post" class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Store Name</label>
                        <input type="text" name="store_name" placeholder="Enter store name..." 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea name="store_description" rows="3" placeholder="What do you sell?" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none"></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Theme</label>
                        <select name="store_theme" class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-indigo-500 outline-none">
                            <option value="">Select Theme</option>
                            <option value="default">Default Modern</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                        <select name="country" class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-indigo-500 outline-none">
                            <option value="">Select Country</option>
                            <option value="morroco">Morocco</option>
                            <option value="united states">United States</option>
                        </select>
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Business Address</label>
                        <input type="text" name="address" placeholder="Physical location" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                    </div>

                    <div class="md:col-span-2 pt-2">
                        <input type="submit" name="add_store" value="Create Store" 
                            class="w-full sm:w-auto px-8 py-3 bg-indigo-600 text-white font-bold rounded-lg hover:bg-indigo-700 transition-all cursor-pointer shadow-md shadow-indigo-100">
                        <p class="mt-3 text-sm text-center sm:text-left"><?php echo $add_store_message; ?></p>
                    </div>
                </form>
            </div>
        </section>

        <section>
            <div class="flex items-center justify-between mb-6">
                <h4 class="text-xl font-bold text-gray-800">
                    Active Stores <span class="ml-2 px-2 py-0.5 bg-gray-200 text-gray-600 text-sm rounded-full"><?php echo $stores_count; ?></span>
                </h4>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php foreach($storeInfo as $store) { ?>
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 hover:border-indigo-300 transition-colors group">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">
                                <?php echo $store["store_name"]; ?>
                            </h3>
                            <p class="text-xs text-gray-400">Created: <?php echo $store["creation_date"]; ?></p>
                        </div>
                        <span class="px-2 py-1 bg-indigo-50 text-indigo-700 text-[10px] font-bold uppercase rounded">
                            <?php echo $store["store_theme"]; ?> Theme
                        </span>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-3 mb-4 space-y-2">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Products:</span>
                            <span class="font-semibold text-gray-700">10</span>
                        </div>
                        <div class="text-[11px] text-gray-500 truncate">
                            <i class="fas fa-link mr-1"></i> 
                            <?php echo $_SERVER["HTTP_HOST"]."/store/".$store["store_name"]; ?>
                        </div>
                    </div>

                    <form action="" method="POST" class="flex gap-2">
                        <input type="hidden" name="store_id" value="<?php echo $store["id"]; ?>">
                        <button type="submit" name="manage_store" class="flex-grow py-2 bg-gray-800 text-white text-sm font-semibold rounded hover:bg-black transition-colors">
                            Manage
                        </button>
                        <button type="submit" name="delete_store" class="px-4 py-2 border border-red-200 text-red-600 text-sm font-semibold rounded hover:bg-red-50 transition-colors">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </div>
                <?php } ?>
            </div>
        </section>
        
    </div>
</div>