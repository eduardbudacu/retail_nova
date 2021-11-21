<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css"/> 
    </head>
    <body>
    <div id="content">
            <div id="menu-container">
                    <div id="mySidenav" class="sidenav">
                            <a href="#" style="font-size:30px; margin-top: 10px; padding-left:32px;" class="closebtn " onclick="closeNav()">&#8676;</a>
                            <a href="#">Marcaj</a>
                            <a href="#">Evidenta vanzari</a>
                            <a href="#">Evidenta bonuri</a>
                            <a href="#">Rapoarte</a>
                            <a href="#">Inchidere zi</a>
                            <a href="#">Configurari Produse</a>
                            <a href="#">Configurari</a>
                            <a href="#">Deconectare</a>
                        </div>
                        <span style="font-size:30px;padding:16px;cursor:pointer" onclick="openNav()">&#9776;</span>
                    </div>
            <div id="operations-container">
                <div id="keyboard">
                    <div id="keyboard-result">
                        <input id="keyboard-value" class="numeric-input" type="text" value=""/>
                    </div>
                    <div class="numeric-grid">
                        <div><button class="btn btn-info btn-keyboard" onclick="keyboardKeyPress(1)">1</button></div>
                        <div><button class="btn btn-info btn-keyboard" onclick="keyboardKeyPress(2)">2</button></div>
                        <div><button class="btn btn-info btn-keyboard" onclick="keyboardKeyPress(3)">3</button></div>
                        <div><button class="btn btn-info btn-keyboard" onclick="keyboardKeyPress(4)">4</button></div>
                        <div><button class="btn btn-info btn-keyboard" onclick="keyboardKeyPress(5)">5</button></div>
                        <div><button class="btn btn-info btn-keyboard" onclick="keyboardKeyPress(6)">6</button></div>
                        <div><button class="btn btn-info btn-keyboard" onclick="keyboardKeyPress(7)">7</button></div>
                        <div><button class="btn btn-info btn-keyboard" onclick="keyboardKeyPress(8)">8</button></div>
                        <div><button class="btn btn-info btn-keyboard" onclick="keyboardKeyPress(9)">9</button></div>
                        <div><button class="btn btn-info btn-keyboard" onclick="keyboardKeyPress(0)">0</button></div>
                        <div><button class="btn btn-info btn-keyboard" onclick="keyboardKeyPress('.')">.</button></div>
                        <div class="delete-sign"><button class="btn btn-danger btn-keyboard" onclick="keyboardKeyPress(-1)">&lt;&lt;</button></div>
                    </div>
                </div>
                <div id="catalog-container">
                        <div id="search">
                                <input class="form-control search" type="text" placeholder="Cauta produs"/>
                        </div>
                    <div id="catalog">
                        <div class="category-grid" id="catalog-content">
                            
                        </div>
                    </div>
                    <div id="catalog-navigation">
                        <div class="navigation-grid">
                            <button class="btn btn-up" style="font-size:25px; text-align: middle" onclick="scrollFunction('up')">&#8613;</button>
                            <button class="btn btn-exit" style="font-size:25px; text-align: middle" onclick="showCategories()">&#8676;</button>
                            <button class="btn btn-down" style="font-size:25px; text-align: middle" onclick="scrollFunction('down')">&#8615;</button>
                        </div>
                    </div>
                    
                </div>
                <div id="order-items">
                    <div class="order-header-grid" id="order-header">
                        <p>CANTITATE</p>
                        <p>PRODUS</p>
                        <p>PRET</p>
                        <p>TOTAL</p>
                    </div>
                    <div class="order-contents" id="order-info"></div>
                </div>
                <div class="payment-container">
                    <div class="receipt">
                            <div><p>NR BON</p></div>
                            <div><p>TOTAL</p></div>
                            <div><p>CASA</p></div>
                            <div><p>28</p></div>
                            <div id="total"></div>
                            <div><p>ADMIN1</p></div>
                        </div>
                    <div class="payment-method">
                        <button class="btn btn-warning btn-lg btn-pay" onclick="showText('numerar')">NUMERAR</button>
                        <button class="btn btn-warning btn-lg btn-pay" onclick="showText('card')">CARD</button>
                        <button class="btn btn-secondary btn-lg btn-pay">OPTIUNI PLATA</button>
                    </div>
                    </div>
                </div>           
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script>
                function openNav() {
                  document.getElementById("mySidenav").style.width = "205px";
                }
               
                function closeNav() {
                  document.getElementById("mySidenav").style.width = "0";
                }
        </script>

        <script type="text/javascript">
            //cand apas pe un buton din tastatura 
            //sa afiseze valoarea lui in elementul input cu id keyboard-value
            //preiua valoarea initiala din input
            //concatenez valoarea primita de functie
            //transmit noua valoare in input

            function keyboardKeyPress(value) {
                var initialValue = document.getElementById("keyboard-value").value.toString()
                if(value == -1) {
                    var newValue = initialValue.slice(0,initialValue.length-1)
                }
                else {
                   var newValue = initialValue + value.toString()
                }
                document.getElementById("keyboard-value").value = newValue
            }           
        </script>   
       
       <script type="text/javascript">
            //cand apas pe buton jos containerul category sa scroleze in jos 
            //cand apas pe buton sus containerul category sa scroleze in sus
            //cand apas pe buton back containerul sa imi incarce si afiseze categoriile
       
        function scrollFunction(direction) {
            //console.log(direction)
            if (direction=='up') {
               document.getElementById("catalog").scrollBy(0, -190) 
            }
            else {
                document.getElementById("catalog").scrollBy(0, 190)
            }
        }
        </script>

<script type="text/javascript">
        // vreau sa afiseze categoriile definitie in json din sectiunea categories
            var catalog = {{ Js::from($catalog) }};

            function addProductToOrderItems(product, quantity) {
                // in lista de orderInfo.items vreau sa adaug o noua linie
                // care arata cantitatea numele produs si pret 
                // pe care le iau din parametrii functiei mele
                // adica product.name, product.proce, quantity
                //console.log(quantity)
                if (quantity=="") {
                    quantity=1
                }
                //console.log(quantity)
                orderInfo.items.push({quantity:quantity, productname:product.name, price:product.price}) 
                // daca cantitatea nu e definita atunci
                // cantitatea sa fie automat cu valoarea "1" 
                showOrder()
                scrollToBottom()
                document.getElementById("keyboard-value").value = ""     
            }  

            function scrollToBottom() {    
                var y=document.getElementById("order-info").scrollHeight
                document.getElementById("order-info").scrollTo(0,y)
                }   

            function showCategories () {
                var catalogContent=document.getElementById("catalog-content")
                var categoriesButtons =""
                for (var i=0; i<catalog.categories.length; i++) {
                    categoriesButtons=categoriesButtons + `<div><button onclick="showProducts(${i})" class="btn btn-info btn-category">${catalog.categories[i].name}</button></div>`
                }
                catalogContent.innerHTML=categoriesButtons
            }

            function showProducts(index) {
                var catalogContent=document.getElementById("catalog-content")
                var productButtons=""
                for (var i=0; i<catalog.categories[index].products.length; i++) {
                    productButtons=productButtons + `<div><button onclick="addProductToOrderItems(catalog.categories[${index}].products[${i}], document.getElementById('keyboard-value').value)" class="btn btn-info btn-category">${catalog.categories[index].products[i].name}</button></div>`
                }
                catalogContent.innerHTML=productButtons
            }
           
            showCategories()
            
            function showText(text) {
                console.log(text)
            }
         </script>

         <script type="text/javascript">
            var orderInfo = {items:[]}
            function showOrder(){
                var orderContent=document.getElementById("order-info")
                var orderLines=""
                for (var i=0; i<orderInfo.items.length; i++) {
                    orderLines=orderLines +  `<div class="area Quantity">${orderInfo.items[i].quantity}</div>
                    <div class="area ProductName-Area">${orderInfo.items[i].productname}</div>
                    <div class="area Price-Area">${orderInfo.items[i].price.toFixed(2).toString()}</div>
                    <div class="area Total-Area">${orderInfo.items[i].quantity*orderInfo.items[i].price.toFixed(2).toString()}</div>
                    <button class="btn btn-danger btn-delete" style="align-items:left" onclick="removeOrderItem(${i})">X</button>`
                }
                orderContent.innerHTML=orderLines
                calculateTotal()
            }

            showOrder()

             function removeOrderItem(position) {
                 /*var items=[]
                 for (var i=0; i<orderInfo.items.length; i++) {
                     if (i!=position) {
                        items.push(orderInfo.items[i])
                     }
                 }*/

                 orderInfo.items = orderInfo.items.filter((el, index) => index != position);
                
                 showOrder()
             }   

            function calculateTotal(){
                // calculeaza totalul produselor comandate
                // defineste o variabila cu elementul cu id-ul total
                // definim o variabila ce reprezinta valoarea totala a produselor comandate
                // parcurgem vectorul orderInfo pentru a ajunge la pretul total produsului (cantitate*pret)
                // facem suma din totaluri porning de la zero adunand mereu ultima valoarea
                var receiptTotal=document.getElementById("total")
                var orderTotal=0
                for (var i=0; i<orderInfo.items.length; i++) {
                    orderTotal=orderTotal + (orderInfo.items[i].quantity*orderInfo.items[i].price.toFixed(2).toString())
                }
                orderTotal=Math.round(orderTotal,2).toFixed(2).toString()
                receiptTotal.innerHTML=`<p>${orderTotal}<p>`
            }
            

            </script>

    </body>
</html>