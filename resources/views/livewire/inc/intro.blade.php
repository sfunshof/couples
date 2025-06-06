<div class="center-container">
    <div class="container text-center mb-5">
         <img src="{{ asset('img/logo.png') }}" alt="Centered Image" class="img-fluid center-img">
    </div>
    <div class="center-text mb-4">
        <h1 class="text-primary">Couples Koinonia</h1>
        <p>
           Welcome to the 2025 Couples Kononia conference. Please click on the 
           button below to start this year's activities
         </p>
    </div>
    <button @click="startRegisterFunc"   type="button" class="btn btn-lg btn-outline-primary w-100 ">
        Start Registration
    </button>
</div>