<div class="max-w-lg rounded-lg shadow-lg p-5">
   {{-- <form action="{{ route ()}} "  method="POST">   --}}
     <button class="text-4xl text-center tracking-wider text-gray-600 py-10" id="phone_number">
        {{-- {{$phone_number}} --}}
    </button>


    <div class="grid grid-cols-3 gap-4" id="target">
        <button id="button-0" class="bg-gray-300 text-2xl button" onclick="addNumber('1')" value="1">1</button>
        <button id="button-1" class="bg-gray-300 text-2xl button" onclick="addNumber('2')" value="2">2</button>
        <button id="button-2" class="bg-gray-300 text-2xl button" onclick="addNumber('3')" value="3">3</button>
        <button id="button-3" class="bg-gray-300 text-2xl button" onclick="addNumber('4')" value="4">4</button>
        <button id="button-4" class="bg-gray-300 text-2xl button" onclick="addNumber('5')" value="5">5</button>
        <button id="button-5" class="bg-gray-300 text-2xl button" onclick="addNumber('6')" value="6">6</button>
        <button id="button-6" class="bg-gray-300 text-2xl button" onclick="addNumber('7')" value="7">7</button>
        <button id="button-7" class="bg-gray-300 text-2xl button" onclick="addNumber('8')" value="8">8</button>
        <button id="button-8" class="bg-gray-300 text-2xl button" onclick="addNumber('9')" value="9">9</button>
        <button id="button-9" class="bg-gray-300 text-2xl button" onclick="addNumber('+')" value="+">+</button>
        <button id="button-10" class="col-span-1 bg-gray-300 text-2xl button" onclick="addNumber('0')" value="0">0</button>
        <button  id="delete-button" class="col-span-1 bg-gray-300 text-2xl button" onclick="removeNumber()">Del</button>
    </div>
    

    <div class="mt-4">
        <button type="submit" id="call_btn" onclick="return call_initiate()" class="w-full bg-green-500 py-3 text-white text-2xl uppercase font-black rounded-lg hover:bg-green-600 transition-all duration-700">
            {{$call_button_message}}
            </button>
    </div>

{{-- </form> --}}
 

</div>


<script>
    // console.log("Hello World");
 
   function addNumber(num){
       
        let number = document.getElementById('phone_number').innerHTML + num;
        number = number.trim(' ');
        if(number.length <= 13){
        document.getElementById('phone_number').innerHTML=number;
        }
        else{
            alert("You have reached maximum limit of a phone number")
        }
   }
 
   function removeNumber(){
       let number = document.getElementById('phone_number').innerHTML;
       number = number.substring(0, number.length - 1);
       number = number.trim(' ');
        if(number.length >=0){
       document.getElementById('phone_number').innerHTML=number;
       }
       else{
           alert("Nothing to delete");
       }
   }
 
   function call_initiate(){
      
       const number = document.getElementById('phone_number').innerHTML;
       let phone_number = document.getElementById('phone_number');
       if (number.length== 12 || number.length == 13){
        // Livewire.emit('call_initiate',number);
        // window.location.href="{{ route('mobile', [number])  ) }}"
       }
       else{
           alert("Invalid Number");
           phone_number.focus();
           return false;
 
       }
   }

</script>
