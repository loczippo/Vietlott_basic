<?php
  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $a = range(1,45);
    shuffle($a);
    $array = array_slice($a, 0, 6);
    //$array = [1,2,3,4,5,6];
    // die;
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/style.css">
  </head>
  <body>
      <div class="content">
          <div class="card" style="width: 31.3rem">
            <div class="card-header d-flex justify-content-between">
              <span class="sidebar-toggle mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
              </span>
              <h5 class="card-title"><img src="https://muavietlott.com/img/logo/logo-long-white.png" alt="" width="100"></h5>
              <span><a class="login" href="">Đăng nhập</a></span>
            </div>
            <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted">Chọn bộ số may mắn của bạn!</h6>
              <div class="col">
                <div class="align-items-center my-3 row">
                  <div class="text-left" style="width: 12%;">
                    <span class="number-circle" data-toggle="modal" data-target="#exampleModal">A</span>
                  </div>
                  <div class="text-center" width="70%">
                  <span class="number-circle mr-1 hover-pointer p1" id='p1'><?php if(isset($_POST['data'])) echo (explode(',',$_POST['data'][0]))[0]; ?></span>
                      <span class="number-circle mr-1 hover-pointer p2" id='p2'><?php if(isset($_POST['data'])) echo (explode(',',$_POST['data'][0]))[1]; ?></span>
                      <span class="number-circle mr-1 hover-pointer p3" id='p3'><?php if(isset($_POST['data'])) echo (explode(',',$_POST['data'][0]))[2]; ?></span>
                      <span class="number-circle mr-1 hover-pointer p4" id='p4'><?php if(isset($_POST['data'])) echo (explode(',',$_POST['data'][0]))[3]; ?></span>
                      <span class="number-circle mr-1 hover-pointer p5" id='p5'><?php if(isset($_POST['data'])) echo (explode(',',$_POST['data'][0]))[4]; ?></span>
                      <span class="number-circle mr-1 hover-pointer p6" id='p6'><?php if(isset($_POST['data'])) echo (explode(',',$_POST['data'][0]))[5]; ?></span>
                  </div>
                  <div class="text-right ml-5">
                    <span class="number-circle hover-pointer" id="unset">
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg>
                    </span>
                  </div>
                </div>
              </div>
              <form method="POST" id='form'>
                <div class="w-100 row" style="margin-left: 0.8px">
                  <button type="button" id='random' class="w-50 border-radius-none btn btn-success">NGẪU NHIÊN</button>
                  <input type="text" id="data" name="data[]" value="" hidden>
                  <input type='button' id='dat' class="w-50 border-radius-none btn btn-danger" value="MUA NGAY">
                </div>
              </form>
            </div>
            <div class="card-footer">
              <div class="col">
                  <div class="align-items-center my-3 row">
                    <div class="text-left" style="width: 25%;">
                      <span>Giải đặc biệt</span>
                    </div>
                    <div class="text-center" width="70%">
                    <span class="number-circle mr-1 hover-pointer p1" id='p1'><?php if(isset($_POST['data'])) echo $array[0]; ?></span>
                    <span class="number-circle mr-1 hover-pointer p2" id='p2'><?php if(isset($_POST['data'])) echo $array[1]; ?></span>
                    <span class="number-circle mr-1 hover-pointer p3" id='p3'><?php if(isset($_POST['data'])) echo $array[2]; ?></span>
                    <span class="number-circle mr-1 hover-pointer p4" id='p4'><?php if(isset($_POST['data'])) echo $array[3]; ?></span>
                    <span class="number-circle mr-1 hover-pointer p5" id='p5'><?php if(isset($_POST['data'])) echo $array[4]; ?></span>
                    <span class="number-circle mr-1 hover-pointer p6" id='p6'><?php if(isset($_POST['data'])) echo $array[5]; ?></span>
                    </div>
                  </div>
              </div>
             <h6 style="color: black; text-shadow: 5px 2px 4px black">Kết quả:
              <?php
                if(isset($_POST['data'])) {
                  $array1 = (explode(',',$_POST['data'][0]));
                  $danhsach = array_intersect($array, $array1);
                  echo "Trúng ". count($danhsach) . " số so với giải đặc biệt</h6>";
                  echo count($danhsach)>0?'<h6 style="color: black; text-shadow: 5px 2px 4px black">Đó là: </h6>':'';
                  $i = 1;
                  foreach($danhsach as $row) {
                    echo "<span style='color: white;background-color:red;' class='number-circle mr-1 hover-pointer p${i}' id='p${i}'>${row}</span>";
                    $i++;
                  }
                }
                else echo "Chưa quay";
              ?>
            </div>
          </div>
      </div>
    <!-- MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: white; color: black;">
            <span class="modal-title" id="exampleModalLabel">A</span>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- <span class="number-circle mt-1 mr-1">01</span><span class="number-circle mt-1 mr-1">02</span><span class="number-circle mt-1 mr-1">03</span><span class="number-circle mt-1 mr-1">04</span><span class="number-circle mt-1 mr-1">05</span><span class="number-circle mt-1 mr-1">06</span><span class="number-circle mt-1 mr-1">07</span><span class="number-circle mt-1 mr-1">08</span><span class="number-circle mt-1 mr-1">09</span><span class="number-circle mt-1 mr-1">10</span><span class="number-circle mt-1 mr-1">11</span><span class="number-circle mt-1 mr-1">12</span><span class="number-circle mt-1 mr-1">13</span><span class="number-circle mt-1 mr-1">14</span><span class="number-circle mt-1 mr-1">15</span><span class="number-circle mt-1 mr-1">16</span><span class="number-circle mt-1 mr-1">17</span><span class="number-circle mt-1 mr-1">18</span><span class="number-circle mt-1 mr-1">19</span><span class="number-circle mt-1 mr-1">20</span><span class="number-circle mt-1 mr-1">21</span><span class="number-circle mt-1 mr-1">22</span><span class="number-circle mt-1 mr-1">23</span><span class="number-circle mt-1 mr-1">24</span><span class="number-circle mt-1 mr-1">25</span><span class="number-circle mt-1 mr-1">26</span><span class="number-circle mt-1 mr-1">27</span><span class="number-circle mt-1 mr-1">28</span><span class="number-circle mt-1 mr-1">29</span><span class="number-circle mt-1 mr-1">30</span><span class="number-circle mt-1 mr-1">31</span><span class="number-circle mt-1 mr-1">32</span><span class="number-circle mt-1 mr-1">33</span><span class="number-circle mt-1 mr-1">34</span><span class="number-circle mt-1 mr-1">35</span><span class="number-circle mt-1 mr-1">36</span><span class="number-circle mt-1 mr-1">37</span><span class="number-circle mt-1 mr-1">38</span><span class="number-circle mt-1 mr-1">39</span><span class="number-circle mt-1 mr-1">40</span><span class="number-circle mt-1 mr-1">41</span><span class="number-circle mt-1 mr-1">42</span><span class="number-circle mt-1 mr-1">43</span><span class="number-circle mt-1 mr-1">44</span><span class="number-circle mt-1 mr-1">45</span></div> -->
          <div class="modal-body">
            <div class="d-flex flex-wrap justify-content-center">
              <?php
                for($i=1;$i<=45;$i++) {
                  echo "<input class='checkbox' id='check' style='margin-top: 10px' type='checkbox' name='NumberIds[]' value='${i}'/><span id='so${i}' class='number-circle mt-1 mr-2'>${i}</span>";
                }
              ?>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" id='randomcb' style='color: white' class="btn btn-danger">Ngẫu nhiên</button>
            <button type="button" id='finish' class="btn btn-success" data-dismiss="modal">Xong</button>
            <button type="button" class="btn btn-info" data-dismiss="modal">Hủy bỏ</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.min.css">
    
    <script>
      $('#dat').click(function() {
        var p1 = document.getElementById('p1').textContent;
        var p2 = document.getElementById('p2').textContent;
        var p3 = document.getElementById('p3').textContent;
        var p4 = document.getElementById('p4').textContent;
        var p5 = document.getElementById('p5').textContent;
        var p6 = document.getElementById('p6').textContent;
        var data = document.getElementById('data');
        var form = document.getElementById('form');
        if(p1 == "" ||p2 == "" ||p3 == "" ||p4 == "" ||p5 == "" ||p6 == "") {
          sweetalert2();
        }
        else {
          data.value = [p1, p2, p3, p4, p5, p6];
          form.submit();
        }
      })
      function sweetalert2(){
            Swal({
                title: 'Oops!',
                text: 'Chưa đủ bộ số',
                type: 'error',
                confirmButtonText: 'Dạ ck'
            })
        }
      const randomUnique = (range, count) => {
          let nums = new Set();
          while (nums.size < count) {
              nums.add(Math.floor(Math.random() * (range - 1 + 1) + 1));
          }
          return [...nums];
      }
      // random click
      $('#random').click(function(){
        var random = randomUnique(45,6);
        for(var i=0;i<random.length;i++) {
          $("#p"+(i+1)).text(random[i]);
        }
      })
      // unset
      $('#unset').click(function(){
        for(var i = 0; i< 6; i++){
          
          $("#p"+(i+1)).text("");
        }
      })
      // limit checked
      var limit = 6;
      $('input.checkbox').on('change', function() {
        if($(this).siblings(':checked').length >= limit) {
            this.checked = false;
        }
      });

      // finished
      document.getElementById("finish").onclick = function(){
        var myArray = [];
        $("input:checkbox[id=check]:checked").each(function(){
          myArray.push($(this).val());
        });
        for(var i = 0; i< myArray.length; i++){
          $("#p"+(i+1)).text(myArray[i]);
          if(myArray.length == 5) {
            $("#p6").text("");
          }
        }
      }
      

      // random list checked
      function getRand(exclude, max)
      {
          var dupe = true;
          var myRandom;
          
          while(dupe)
          {
              myRandom = Math.floor(Math.random() * max);
              
              var found = false;
              for(var i=0;i<exclude.length; i++)
              {
                  if(myRandom == exclude[i])
                  {
                      found = true;   
                  }
              }
              
              if(!found) dupe = false;
          }
          
          return myRandom;
      }

      window.onload = function(){
          
          document.getElementById("randomcb").onclick = function(){

              var checkboxList = document.getElementsByName("NumberIds[]");
              var rands = [];
              
              var total = 6;
              
              for(var j=0; j<checkboxList.length; j++){ checkboxList[j].checked = false; }
              
              for(var i=0; i<total; i++)
              {
                  var myRandom = getRand(rands, checkboxList.length);
                  rands.push(myRandom);
              }
              
              for(var x=0; x<rands.length; x++)
              { 
                  checkboxList[rands[x]].checked = true;
                  //$('#so'+(rands[x]+1)).css({"background-color": "red", "color":"white"});
              }
          };
      };
    </script>
  </body>
</html>
