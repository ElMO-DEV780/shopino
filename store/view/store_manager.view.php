<?php if($session->has("store_id")) { ?>
<div class="container min-h-screen bg-gray-50 py-8 px-4 sm:px-6 lg:px-8 font-sans">
    <div class="max-w-6xl mx-auto space-y-8">

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-2xl font-black text-gray-900 flex items-center gap-2 italic uppercase tracking-tight">
                    <i class="fas fa-tools text-indigo-600"></i> Store Manager
                </h1>
                <div class="mt-1 flex items-center gap-2">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                    </span>
                    <p class="text-sm font-medium text-gray-600">
                        Active Store: <span class="text-indigo-600 font-bold"><?php echo !empty($opened_store) ? $opened_store[0]["store_name"] : "No store selected"; ?></span>
                    </p>
                </div>
            </div>
            <div class="flex gap-3">
                 <a href="dashboard?src=store_settings" class="text-sm font-semibold text-gray-500 hover:text-gray-800 flex items-center gap-1 transition-colors">
                    <i class="fas fa-chevron-left text-xs"></i> Back to Stores
                 </a>
            </div>
</div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <aside class="lg:col-span-1">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 sticky top-8">
                    <h4 class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <i class="fas fa-plus-circle text-green-500"></i> Add Product
                    </h4>
                    <form action="" method="post" class="space-y-4">
                        <input type="text" name="product_name" placeholder="Product Name" class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
                        
                        <textarea name="product_description" placeholder="Description" rows="2" class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition-all"></textarea>
                        
                        <div class="grid grid-cols-2 gap-3">
                            <div>
                                <label class="text-[10px] font-bold text-gray-400 uppercase ml-1">Original Price</label>
                                <input type="number" name="original_price" placeholder="0.00" class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
                            </div>
                            <div>
                                <label class="text-[10px] font-bold text-gray-400 uppercase ml-1">Sale Price</label>
                                <input type="number" name="sale_price" placeholder="0.00" class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
                            </div>
                        </div>

                        <input type="number" name="available_quantity" placeholder="Stock Quantity" class="w-full px-4 py-2.5 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
                        
                        <select name="product_category" class="w-full px-4 py-2.5 border border-gray-200 rounded-xl bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
                            <?php foreach($categories as $category) { ?>
                                <option value="<?php echo $category["category_name"]; ?>"><?php echo $category["category_name"]; ?></option>
                            <?php } ?>
                        </select>

                        <button type="submit" name="add_product" class="w-full py-3 bg-indigo-600 text-white font-bold rounded-xl hover:bg-indigo-700 shadow-lg shadow-indigo-100 transition-all flex items-center justify-center gap-2">
                            <i class="fas fa-save"></i> Save Product
                        </button>
                    </form>
                </div>
            </aside>

            <div class="lg:col-span-2 space-y-6">
                
                <div class="bg-white p-4 rounded-2xl shadow-sm border border-gray-200 flex items-center gap-4">
                    <div class="relative flex-grow">
                        <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <form action="" method="post">
                            <input type="search" name="search" id="search_input" placeholder="Search inventory..." class="w-full pl-11 pr-4 py-2 border border-transparent bg-gray-100 rounded-xl focus:bg-white focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
                        </form>
                    </div>
                </div>

                <div id="products_wrapper" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <?php foreach($products as $product) { ?>
                    <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                        <div class="p-5">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="font-bold text-gray-900"><?php echo $product["product_name"]; ?></h3>
                                <span class="text-[10px] px-2 py-0.5 bg-gray-100 text-gray-500 rounded-full font-bold uppercase"><?php echo $product["product_category"]; ?></span>
                            </div>
                            <p class="text-sm text-gray-500 line-clamp-2 mb-4 leading-relaxed"><?php echo $product["product_description"]; ?></p>
                            
                            <div class="grid grid-cols-2 gap-4 bg-gray-50 p-3 rounded-xl mb-4">
                                <div>
                                    <p class="text-[10px] text-gray-400 uppercase font-bold">Cost</p>
                                    <p class="text-gray-400 line-through text-xs">$<?php echo $product["original_price"]; ?></p>
                                </div>
                                <div>
                                    <p class="text-[10px] text-indigo-400 uppercase font-bold">Sale</p>
                                    <p class="text-indigo-600 font-black">$<?php echo $product["sale_price"]; ?></p>
                                </div>
                                <div class="col-span-2 border-t border-gray-200 pt-2 flex justify-between items-center">
                                    <p class="text-[10px] text-gray-400 uppercase font-bold">In Stock</p>
                                    <p class="text-sm font-bold <?php echo $product["available_quantity"] < 5 ? 'text-red-500' : 'text-gray-700'; ?>">
                                        <?php echo $product["available_quantity"]; ?> units
                                    </p>
                                </div>
                            </div>

                            <form action="" method="POST" class="flex gap-2">
                                <button type="submit" name="update_product" class="flex-grow py-2 bg-gray-100 text-gray-700 text-xs font-bold rounded-lg hover:bg-gray-200 transition-colors uppercase">Edit</button>
                                <input type="hidden" name="delete_product_id" value="<?php echo $product["id"];?>">
                                <button type="submit" name="delete_product" class="px-3 py-2 text-red-400 hover:text-red-600 transition-colors">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <div class="mt-12 p-6 bg-red-50 rounded-2xl border border-red-100 flex items-center justify-between">
                    <div>
                        <h4 class="text-red-800 font-bold">Danger Zone</h4>
                        <p class="text-red-600 text-xs">Remove all products from this store permanently.</p>
                    </div>
                    <form action="" method="post">
                        <input type="submit" name="delete_all_products" value="Purge Inventory" 
                            class="px-4 py-2 bg-red-600 text-white text-xs font-bold rounded-lg hover:bg-red-700 cursor-pointer shadow-sm">
                    </form>
                </div>
                    </div>
        </div>
    </div>
</div>
<?php } else { ?>
<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4 text-center">
    <div class="max-w-sm">
        <div class="text-6xl mb-4">🏪</div>
        <h2 class="text-2xl font-bold text-gray-800 mb-2">No Store Active</h2>
        <p class="text-gray-500 mb-6">You need to select a store from your dashboard to manage its inventory.</p>
        <a href="dashboard?src=store_settings" class="inline-block px-8 py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-100">Go to My Stores</a>
    </div>
</div>
<?php }?>