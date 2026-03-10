<!--<div class="categories container">
<hr>
<h1>categories manager:</h1>
<h4>add category: </h4>
<form action="" method="post">
    <input type="text" placeholder="category" name="category_name">
    <input type="submit" value="add category" name="add_category">
</form>
</div>-->


<div class="container min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 font-sans">
    <div class="max-w-2xl mx-auto">
        
        <div class="mb-8 text-center sm:text-left">
            <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight flex items-center justify-center sm:justify-start gap-3">
                <span class="p-3 bg-indigo-100 text-indigo-600 rounded-2xl">
                    <i class="fas fa-tags"></i>
                </span>
                Categories Manager
            </h1>
            <p class="mt-2 text-gray-500 ml-1">Organize your products by creating meaningful labels.</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="p-6 sm:p-8">
                <div class="flex items-center gap-2 mb-6">
                    <div class="h-2 w-2 bg-indigo-500 rounded-full"></div>
                    <h4 class="text-sm font-bold text-gray-700 uppercase tracking-widest">Add New Category</h4>
                </div>

                <form action="" method="post" class="flex flex-col sm:flex-row gap-3">
                    <div class="relative flex-grow">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fas fa-folder-plus text-gray-400"></i>
                        </div>
                        <input type="text" name="category_name" placeholder="e.g. Electronics, Clothing..." 
                            class="w-full pl-11 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all placeholder:text-gray-400">
                    </div>
                    
                    <button type="submit" name="add_category" 
                        class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-bold rounded-xl text-white bg-indigo-600 hover:bg-indigo-700 hover:scale-[1.02] active:scale-[0.98] transition-all shadow-md shadow-indigo-100">
                        Add Category
                    </button>
                </form>
            </div>

            <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex items-center gap-2">
                <i class="fas fa-info-circle text-indigo-400 text-xs"></i>
                <p class="text-xs text-gray-500">Categories help your customers filter products in your store storefront.</p>
            </div>
        </div>

        <div class="relative my-10">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-200"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-gray-50 text-gray-400">Manage existing categories in the store manager</span>
            </div>
        </div>

    </div>
</div>