<?php
$connect = mysqli_connect("localhost", "root", "", "eac2");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT name_dd,rating_dd,diadiem.id_kv,diadiem.id_dd,name_kv,ngaydang,img_dd,rating FROM ((diadiem INNER JOIN khuvuc ON diadiem.id_kv=khuvuc.id_kv) INNER JOIN noidungbocuc on diadiem.id_dd=noidungbocuc.id_dd)
	WHERE name_dd LIKE '%".$search."%'
	OR rating_dd LIKE '%".$search."%'
	OR diadiem.id_kv LIKE '%".$search."%'
	OR diadiem.id_dd LIKE '%".$search."%'
  OR name_kv LIKE '%".$search."%'
  OR ngaydang LIKE '%".$search."%'
  OR img_dd LIKE '%".$search."%'
  OR rating LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT name_dd,rating_dd,diadiem.id_kv,diadiem.id_dd,name_kv,ngaydang,ngaydi,ngayve,img_dd,rating FROM ((diadiem INNER JOIN khuvuc ON diadiem.id_kv=khuvuc.id_kv) INNER JOIN noidungbocuc on diadiem.id_dd=noidungbocuc.id_dd) ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
// 	$output .= '
//   <div class="bg_box_item">

//   <div class="bg_img_item">
//       <img src="img/'.$ap['img_dd'].'" alt="">
//   </div>
//   <div class="bg_text_item">

//      <div class="title_kv_item">
//          <div class="kv_item">
//               '.$ap['name_kv'].'
//          </div>
//      </div>
//       <div class="title_text_item">
//           <div class="text_item">
//           <a href="index.php?ctrl=wewillgo&act=content&idcontent='.$ap['id_dd'].'">'.$ap['name_dd'].'</a>
//           </div>
//       </div>
//       <div class="date_item">
//           <div class="float_date">
//               '.$ap['ngaydang'].'
//           </div>
//       </div>



//       <div class="title_view_item">
//           <div class="rating_item">
//               rating:   '.$ap['rating'].'

//           </div>
//       </div>
//   </div>
// </div>
//   ';
// }
	while($ap = mysqli_fetch_array($result))
	{
		$output .= '
    <div class="bg_box_item">

    <div class="bg_img_item">
        <img src="img/'.$ap['img_dd'].'" alt="">
    </div>
    <div class="bg_text_item">

       <div class="title_kv_item">
           <div class="kv_item">
                '.$ap['name_kv'].'
           </div>
       </div>
        <div class="title_text_item">
            <div class="text_item">
            <a href="index.php?ctrl=wewillgo&act=content&idcontent='.$ap['id_dd'].'">'.$ap['name_dd'].'</a>
            </div>
        </div>
        <div class="date_item">
            <div class="float_date">
               Ngày đi dự kiến: '.$ap['ngaydi'].'/ '.$ap['ngayve'].' 
            </div>
        </div>



        <div class="title_view_item">
            <div class="rating_item">
                rating:   '.$ap['rating_dd'].'

            </div>
        </div>
    </div>
  </div>
    ';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
