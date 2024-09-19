<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BACLL</title>
    {{-- link stylesheets in css --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{-- link icon in website --}}
    <link rel="icon" href="{{asset('#')}}">
    {{-- link cdn bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- link fonr awersome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row" style="min-height: 100vh">
            <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <div class="card p-5 w-100 m-0 p-0" style="width: 40%;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                    <form action="OGABACLL" class="d-flex flex-column">
                        <label for="">គណិតវិទ្យា <span class="text-danger">ពិន្ទុ​ 0/125</span></label>
                        <input type="text" class="form-control mt-2" name="គណិតវិទ្យា" id="គណិតវិទ្យា">
                        <label for="">ខ្មែរ<span class="text-danger">ពិន្ទុ​ 0/75</span></label>
                        <input type="text" class="form-control mt-2 " name="ខ្មែរ"  id="ខ្មែរ">
                        <label for="">រូបវិទ្យា<span class="text-danger">ពិន្ទុ​ 0/75</span></label>
                        <input type="text" class="form-control mt-2" name="រូបវិទ្យា" id="រូបវិទ្យា">
                        <label for="">គីមីវិទ្យា<span class="text-danger">ពិន្ទុ​ 0/75</span></label>
                        <input type="text" class="form-control mt-2" name="គីមីវិទ្យា" id="គីមីវិទ្យា">
                        <label for="">ជីវះវិទ្យា<span class="text-danger">ពិន្ទុ​ 0/75</span></label>
                        <input type="text" class="form-control mt-2" name="ជីវះវិទ្យា" id="ជីវះវិទ្យា">
                        <label for="">អង់គ្លេស<span class="text-danger">ពិន្ទុ​ 0/50</span></label>
                        <input type="text" class="form-control mt-2" name="អង់គ្លេស" id="អង់គ្លេស">
                        <div class="d-flex gap-2 align-items-center m-0 p-0">
                            <label for="" class="m-0 p-9 mt-2">ពិន្ទុសរុប</label>
                            <h6 id="ពិន្ទុសរុប" class="m-0 p-0 mt-2"></h6>
                        </div>
                        <div class="d-flex gap-2 align-items-center m-0 p-0">
                            <label for="" class="m-0 p-9 mt-2">មធ្យមភាគ</label>
                            <h6 id="មធ្យមភាគ" class="m-0 p-0 mt-2"></h6>
                        </div>
                        <div class="d-flex gap-2 align-items-center m-0 p-0">
                            <label for="" class="m-0 p-9 mt-2">និទ្ទេស</label>
                            <h6 id="និទ្ទេស" class="m-0 p-0 mt-2"></h6>
                        </div>
                        <div class="d-flex alig-items-center justify-content-center ">
                            <input type="button" class="btn btn-primary" onclick="js()" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        function js(){
            var គណិតវិទ្យា = Number(document.getElementById("គណិតវិទ្យា").value);
            var ខ្មែរ = Number(document.getElementById("ខ្មែរ").value);
            var រូបវិទ្យា = Number(document.getElementById("រូបវិទ្យា").value);
            var គីមីវិទ្យា = Number(document.getElementById("គីមីវិទ្យា").value);
            var ជីវះវិទ្យា = Number(document.getElementById("ជីវះវិទ្យា").value);
            var អង់គ្លេស = Number(document.getElementById("អង់គ្លេស").value);
            let total = គណិតវិទ្យា + ខ្មែរ + រូបវិទ្យា + គីមីវិទ្យា + ជីវះវិទ្យា + អង់គ្លេស;
            let average = total / 6;

            document.getElementById("ពិន្ទុសរុប").innerHTML = total;
            document.getElementById("មធ្យមភាគ").innerHTML = average

            if(total <= 475 && total >= 427){
                document.getElementById("និទ្ទេស").innerHTML = "A";
            } else if(total <= 427 && total >= 380){
                document.getElementById("និទ្ទេស").innerHTML = "B";
            } else if(total <= 380 && total >= 332){
                document.getElementById("និទ្ទេស").innerHTML = "C";
            } else if(total <= 332 && total >= 285){
                document.getElementById("និទ្ទេស").innerHTML = "D";
            } else if(total <= 285 && total >= 237){
                document.getElementById("និទ្ទេស").innerHTML = "E";
            } else {
                document.getElementById("និទ្ទេស").innerHTML = "F";
            }ment.getElementById(និទ្ទេស).innerHTML = "F";
        }
    </script>
    {{-- link cdn javascript  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
