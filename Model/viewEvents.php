<?php
//include 'dbh.inc.php';

class ViewEvents extends EventWindow
{

    public function ShowEvent_List()
    {
        $datas = $this->getAllEvents();
        foreach ($datas as $key=>$data) {

            $url = explode("/", $data['url']);

            //echo '<div class="col-md-3"><h4 class="dropdown-heading"><a  href="cesAcadamy.php?idconsultancies='.$data['idconsultancies'].'" >'. $data['heading'].'</a></h4><ul class="dropdown-list"><li>'. $data['summary'].' </li></ul></div>';
            echo '<li class="glide__slide">
                        <div class="container" id="post-slider">
                                <div class="row">
                                        <div class="col-md-7 post-slider-image" onclick="viewImageFunction( &#x22post'.$key.'&#x22)" id="post'.$key.'" style=" background-image: url( &#x22;assets/images/' . $url[4] . '&#x22;)">
                                            <div class="overlay">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search-plus" class="svg-inline--fa fa-search-plus fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path d="M304 192v32c0 6.6-5.4 12-12 12h-56v56c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-56h-56c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h56v-56c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v56h56c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    <div class="col-md-5" id="post-slider-content">
                                        <h4  class="card-title mbr-fonts-style display-7"> ' . $data['name'] . '</h4><p>Date: ' . $data['date'] . '</p><p>Time: ' . $data['start_time'] . '</p><p>Venue: ' . $data['location'] . '</p>
                                    </div>
                                 </div>
                        </div>
                </li>';
        }
    }
}