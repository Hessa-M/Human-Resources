<?php
	//DB configuration Constants
	define('_HOST_NAME_', 'localhost');
	define('_USER_NAME_', 'root');
	define('_DB_PASSWORD', '');
	define('_DATABASE_NAME_', 'humanresourcemanagement');
	
	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
	
	$sqlQuery 	= $databaseConnection->query("SELECT EID FROM employee");
	$count  	= $sqlQuery->rowCount();

	$adjacents = 2;
	$records_per_page = 12;
	
	$page = (int) (isset($_POST['page_id']) ? $_POST['page_id'] : 1);
	$page = ($page == 0 ? 1 : $page);
	$start = ($page-1) * $records_per_page;
	
	$next = $page + 1;    
	$prev = $page - 1;
	$last_page = ceil($count/$records_per_page);
	$second_last = $last_page - 1; 

	
	$pagination = "";
	if($last_page > 1){
        $pagination .= "<div class='pagination'>";
       // if($page > 1)
           // $pagination.= "<a href='javascript:void(0);' onClick='change_page(1);'>&laquo; First</a>";
       // else
           // $pagination.= "<span class='disabled'>&laquo; First</span>";
		
		if ($page > 1)
            $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($prev).");'>&laquo; Previous&nbsp;&nbsp;</a>";
        else
            $pagination.= "<span class='disabled'>&laquo; Previous&nbsp;&nbsp;</span>";   
		
        if ($last_page < 7 + ($adjacents * 2))
        {   
            for ($counter = 1; $counter <= $last_page; $counter++)
            {
                if ($counter == $page)
                    $pagination.= "<span class='current'>$counter</span>";
                else
                    $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($counter).");'>$counter</a>";     
			}
        }
        elseif($last_page > 5 + ($adjacents * 2))
        {
            if($page < 1 + ($adjacents * 2))
            {
                for($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                {
                    if($counter == $page)
                        $pagination.= "<span class='current'>$counter</span>";
                    else
                        $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($counter).");'>$counter</a>";     
                }
                $pagination.= "...";
                $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($second_last).");'> $second_last</a>";
                $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($last_page).");'>$last_page</a>";   
           
           }
           elseif($last_page - ($adjacents * 2) > $page && $page > ($adjacents * 2))
           {
               $pagination.= "<a href='javascript:void(0);' onClick='change_page(1);'>1</a>";
               $pagination.= "<a href='javascript:void(0);' onClick='change_page(2);'>2</a>";
               $pagination.= "...";
               for($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
               {
                   if($counter == $page)
                       $pagination.= "<span class='current'>$counter</span>";
                   else
                       $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($counter).");'>$counter</a>";     
               }
               $pagination.= "..";
               $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($second_last).");'>$second_last</a>";
               $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($last_page).");'>$last_page</a>";   
           }
           else
           {
               $pagination.= "<a href='javascript:void(0);' onClick='change_page(1);'>1</a>";
               $pagination.= "<a href='javascript:void(0);' onClick='change_page(2);'>2</a>";
               $pagination.= "..";
               for($counter = $last_page - (2 + ($adjacents * 2)); $counter <= $last_page; $counter++)
               {
                   if($counter == $page)
                        $pagination.= "<span class='current'>$counter</span>";
                   else
                        $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($counter).");'>$counter</a>";     
               }
           }
        }
        if($page < $counter - 1)
            $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($next).");'>Next &raquo;</a>";
        else
            $pagination.= "<span class='disabled'>Next &raquo;</span>";
		
		//if($page < $last_page)
          //  $pagination.= "<a href='javascript:void(0);' onClick='change_page(".($last_page).");'>Last &raquo;</a>";
        //else
          //  $pagination.= "<span class='disabled'>Last &raquo;</span>";
        
        $pagination.= "</div>";       
    }


    $records = $databaseConnection->query("SELECT * FROM employee LIMIT $start, $records_per_page");
    $count   = $records->rowCount();
    $HTML    = '';


if($count > 0)
{

    foreach($records as $row) {
		
	                        echo ' <div class="col-sm-3 portfolio-masonry"> ';
							echo ' <div class="portfolio-box web-design">';
		                	echo ' <div class="portfolio-box-container">';
			                echo ' <img src="assets/img/portfolio/'. $row['EID'].'.jpg">';
			                echo '		<h3>';
							echo $row['Ename']; 
							echo '</h3>';
							echo ' <h5>	<div class=" more">'; 
                            echo $row['Email'];  
							echo '<br>';
		                    echo $row['EXT']; 
							echo '<br>';
		                    echo $row['Position']; 
							echo '		 <br>';
		                    echo $row['BriefJobDescription'];
							echo '	</div> </h5>';
			                echo '	</div>'; 
							echo'<br><br><br><br>';
			                echo '</div>';
		                    echo '</div>';
	}
	
}
else
{
    $HTML='No Data Found';
}


echo $HTML;
echo $pagination;

echo'<script src="assets/js/MoreDetiles.js"></script>';


?>