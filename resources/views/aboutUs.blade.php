<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.head')
    </head>
    <body>
        @include('layouts.navbar')
        @include('layouts.lang')
        
        <main style="min-height: 80vh;">
            <h1 class="d-flex ms-3 pt-3 justify-content-center">About Us</h1>

            <div class="container">
                <div class="row">
                    <h2 class = "pt-2">LAVA misija ir nodrošināt pacientiem Latvijā augstākās kvalitātes asinsvadu piekļuves aprūpi, veicinot izglītību, pētniecību un inovācijas šajā jomā.</h2>

                    <div class="col-sm mt-3">
                        <div class="text-center d-flex align-items-center justify-content-center" style="width: 100%; height: 300px; overflow: hidden;">
                            <img src="{{asset('images/about/ivars.jpg')}}" class="img-fluid rounded" alt="Ivars" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>  
                        <h3 class="pt-2 d-flex ">Dr. Ivars Vegeris </h3>
                            <p>Chairman 
                            of the LAVA Board, 
                            Anesthesiologist and 
                            Intensivist with specialized 
                            expertise in pediatric care and 
                            cardiac anesthesia 
                            (anesteziologs reanimatologs 
                            latviešu valodā).</p>            
                
                    </div>
                    <div class="col-sm mt-3">
                        <div class="text-center d-flex align-items-center justify-content-center" style="width: 100%; height: 300px; overflow: hidden;">
                            <img src="{{asset('images/about/linda.jpg')}}" class="img-fluid rounded" alt="Linda" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <h3 class="pt-2 d-flex ">Linda Frīdenberga</h3> 
                        <p>LAVA 
                            Board Member, Anesthesia 
                            and Intensive Care Nurse.</p>        
                    </div>
                    <div class="col-sm mt-3">
                        <div class="text-center d-flex align-items-center justify-content-center" style="width: 100%; height: 300px; overflow: hidden;">
                            <img src="{{asset('images/about/ieva.png')}}" class="img-fluid rounded" alt="Ieva" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>  
                        <h3 class="pt-2 d-flex ">Ieva Zariņa</h3>
                            <p>LAVA Board 
                        Member, Anesthesia and 
                        Intensive Care Nurse. </p>            
                    </div>
                    <h2 class = " pt-2">LAVA misija ir nodrošināt pacientiem Latvijā augstākās kvalitātes asinsvadu piekļuves aprūpi, veicinot izglītību, pētniecību un inovācijas šajā jomā.</h2>

                </div>
            </div>
        </main>
    
        @include('layouts.footer')
    </body>
</html>