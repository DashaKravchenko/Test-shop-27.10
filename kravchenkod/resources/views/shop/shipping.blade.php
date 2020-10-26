@extends('layouts.app')
@section('title', 'Оформление заказа') 

@section('content')
    <div class=" containerCheckout">
    <!--      <form class="col-8">
            <div class="form-group ">
                
            
            <label for="name">Name*
                <input type="text" name="name" placeholder="Jonh Kowalsky" class="form-control">
            </label>
            <label for="address">Address*
                <input type="text" name="address" class="form-control">
            </label>
            <label for="phone">Phone
                <input type="phone" name="phone" placeholder="+48" class="form-control">
            </label>
            <label for="email">
                <input type="email" name="email" class="form-control">
            </label>
            <label for="shipping">Shipping options
                <select name="shipping" id="shipping" required>
          
                    @if( session('totalSum') > 300){
                        <option value="Free"  >Free shipping </option>
                        <option value="Express"selected>Express shipping- additional 9.99 €</option>
                        <option value="Courier">Courier shipping - additional 19.99 €</option>
                    }
                   @else{
                        <option value="Free" selected >Free shipping </option>
                        <option value="Express">Express shipping- additional 9.99 €</option>
                        <option value="Courier">Courier shipping - additional 19.99 €</option>
                    }  
                    @endif

                </select>
            </label>
            <button >Puy</button>
        </form> 
    </div> -->






  
        

   <div class=" col-md-6 " >
   
   <form  class=" mr-auto  letter-form " novalidate>
   @csrf
        
            <div class="col">
                <div class="form-group ">
                   <label for="name">Name*</label>
                   <input type="name" name="name" id="name" class="form-control" placeholder="Jonh Kowalsky"  required>
                   <div class="invalid-feedback">
                      Введите имя
                   </div>
                </div> 
            </div>
             
             <div class="col">
                    <div class="form-group is-invalid">
                       <label for="tel">Address*</label>
                       <input type="tel" name="tel" class="form-control" required>
                       <div class="invalid-feedback">
                          Введите address 
                       </div>
                    </div>
            </div>
        
         <div class="col">
            <div class="form-group is-invalid">
               <label for="tel">Phone</label>
               <input type="tel" name="tel" class="form-control" placeholder="+48" required>
               <div class="invalid-feedback">
                  Введите номер телефона
               </div>
            </div>
         </div>
      

        <div class="form-group is-invalid">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
            <div class="invalid-feedback">
                  Введите Email
            </div>
         </div>

        <div class="form-group">
            <label for="shipping">Shipping options
                <select name="shipping" id="shipping" required>
          
                    @if( session('totalSum') > 300){
                        <option value="Free"  >Free shipping </option>
                        <option value="Express"selected>Express shipping- additional 9.99 €</option>
                        <option value="Courier">Courier shipping - additional 19.99 €</option>
                    }
                   @else{
                        <option value="Free" selected >Free shipping </option>
                        <option value="Express">Express shipping- additional 9.99 €</option>
                        <option value="Courier">Courier shipping - additional 19.99 €</option>
                    }  
                    @endif

                </select>
            </label>
             <div class="invalid-feedback">
                Выберите доставку
             </div>
        </div>
  
      <button type="submit" class="btn btn-secondary" disabled="disabled">Puy</button>
                

   </form>

   </div>


  
          
          
    </div>
@endsection