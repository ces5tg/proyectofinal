<div>
    <div class="my-3">
        <h2 class="text-4xl font-bold text-black">Llena tus datos</h2>
    </div>
    <div class=" div-content-area">
        <div class="wrap-address-billing">
            <form action="#" method="get" name="frm-billing">
                <div class="grid grid-cols-2 gap-4 ">
                    <div>
                        <p class="row-in-form">
                            <label for="fname" class="block">first name<span>*</span></label>
                            <input class="p-2 border-2 w-full hover:border-blue-500 rounded rounded-xl " id="fname"
                                type="text" name="fname" value="" placeholder="Your name">
                        </p>
                    </div>
                    <div>
                        <p class="row-in-form">
                            <label for="lname" class="block">last name<span>*</span></label>
                            <input class="p-2 border-2 w-full hover:border-blue-500 rounded rounded-xl " id="lname"
                                type="text" name="lname" value="" placeholder="Your last name">
                        </p>
                    </div>
                    <div>
                        <p class="row-in-form">
                            <label for="email" class="block">Email Addreess:</label>
                            <input class="p-2 border-2 w-full hover:border-blue-500 rounded rounded-xl " id="email"
                                type="email" name="email" value="" placeholder="Type your email">
                        </p>
                    </div>
                    <div>
                        <p class="row-in-form">
                            <label for="phone" class="block">Phone number<span>*</span></label>
                            <input class="p-2 border-2 w-full hover:border-blue-500 rounded rounded-xl " id="phone"
                                type="number" name="phone" value="" placeholder="10 digits format">
                        </p>
                    </div>
                    <div>
                        <p class="row-in-form">
                            <label for="add" class="block">Address:</label>
                            <input class="p-2 border-2 w-full hover:border-blue-500 rounded rounded-xl " id="add"
                                type="text" name="add" value="" placeholder="Street at apartment number">
                        </p>
                    </div>
                    <div>
                        <p class="row-in-form">
                            <label for="country" class="block">Country<span>*</span></label>
                            <input class="p-2 border-2 w-full hover:border-blue-500 rounded rounded-xl " id="country"
                                type="text" name="country" value="" placeholder="United States">
                        </p>
                    </div>
                    <div>
                        <p class="row-in-form">
                            <label for="zip-code" class="block">Postcode / ZIP:</label>
                            <input class="p-2 border-2 w-full hover:border-blue-500 rounded rounded-xl " id="zip-code"
                                type="number" name="zip-code" value="" placeholder="Your postal code">
                        </p>
                    </div>
                    <div>
                        <p class="row-in-form">
                            <label for="city" class="block">Town / City<span>*</span></label>
                            <input class="p-2 border-2 w-full hover:border-blue-500 rounded rounded-xl " id="city"
                                type="text" name="city" value="" placeholder="City name">
                        </p>
                    </div>
                    <div>
                        <p class="">
                            <label class="mr-4">
                                <input name="create-account" id="create-account" value="forever" type="checkbox">
                                <span>Create an account?</span>
                            </label>
                            <label class="">
                                <input name="different-add" id="different-add" value="forever" type="checkbox">
                                <span>Ship to a different address?</span>
                            </label>
                        </p>
                    </div>
                </div>
            </form>
        </div>
        <div class="my-4 border-t-2">
            <div class="grid grid-cols-2">
                <div class="p-4">
                    <p class="mb-2 uppercase text-xl font-bold">Payment method</p>
                    <hr>
                    <p>Check / Money order</p>
                    <p class="mb-2">Credit Cart (saved)</p>
                    <hr>
                    <div class="">
                        <div class="my-2">
                            <input type="checkbox">
                            <label for="">Direct Bank Transder</label>
                        </div>
                        <div>
                            <input type="checkbox">
                            <label for="">Direct Bank Transder</label>
                        </div>
                        <div class="my-2">
                            <input type="checkbox">
                            <label for="">Direct Bank Transder</label>
                        </div>

                    </div>
                    <div class="my-2">
                        <p class="w-24">Total <span>${{ Cart::total() }}</span> </p>
                    </div>
                    <div>
                        <button
                            class="w-48 text-center p-2 bg-red-600 hover:bg-red-600 text-white font-bold rounded rounded-lg">
                            Nueva Orden
                        </button>
                    </div>
                </div>
                {{-- segundo grid --}}
                <div class="p-4 ">
                    <div>
                        <p class="mb-2 uppercase text-xl font-bold">Shipping Method</p>
                        <hr>
                        <p>Check / Money order</p>
                        <p class="mb-2">Credit Cart (saved)</p>
                        <hr>
                      
                        <p class="mb-2  uppercase text-xl font-bold">Discount Codes</p>
                        <label class="block mb-2">Inserta el cupon</label>
                        <input class="p-2 border-2 w-full hover:border-blue-500 rounded rounded-xl " id="city"
                            type="text">
                        <button
                            class="mt-4 w-48 text-center p-2 bg-red-600 hover:bg-red-600 text-white font-bold rounded rounded-lg">
                            Aplicar
                        </button>
                    </div>
                </div>


            </div>
        </div>



    </div>
    <!--end div content area-->
</div>
<!--end container-->

</div>
