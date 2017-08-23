@if(!$workExperiences->isEmpty())
<main id="about2" class="container-fluid products">
    <section class="container">
        <h2 class="text-ex">تجربه ها</h2>
        <h2>CSS3 Horizontal Timeline</h2>
        <p id="note">Since the flex property only works in Chrome, if your are using other browers please set the $chrome variable to false. <br/> It seems there is a CSS3 transform bug in Safari.</p>
        <ul id='timeline'>
            <li class='entry'>
                <input checked='checked' class='radio' id='trigger5' name='trigger' type='radio'>
                <label for='trigger5'>
      <span>
        Lorem ipsum dolor sit amet
      </span>
                </label>
                <span class='date'>16 May 2013</span>
                <span class='circle'></span>
                <div class='content'>
                    <h3>Lorem ipsum dolor sit amet (16 May 2013)</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati laborum non ipsam ullam tempore reprehenderit illum eligendi cumque mollitia temporibus! Natus dicta qui est optio rerum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati nesciunt! Molestiae officiis voluptate excepturi rem veritatis eum aliquam qui non ipsam ullam tempore reprehenderit illum temporibus! qui est optio rerum.
                    </p>
                </div>
            </li>
            <li class='entry'>
                <input class='radio' id='trigger4' name='trigger' type='radio'>
                <label for='trigger4'>
      <span>
        Lorem ipsum dolor sit amet
      </span>
                </label>
                <span class='date'>15 May 2013</span>
                <span class='circle'></span>
                <div class='content'>
                    <h3>Lorem ipsum dolor sit amet (15 May 2013)</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati nesciunt! Molestiae officiis voluptate excepturi rem veritatis eum aliquam.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem voluptate excepturi rem veritatis eum aliquam qui laborum non ipsam ullam tempore reprehenderit illum eligendi cumque mollitia temporibus! Natus dicta qui est optio rerum.
                    </p>
                </div>
            </li>
            <li class='entry'>
                <input class='radio' id='trigger3' name='trigger' type='radio'>
                <label for='trigger3'>
      <span>
        Lorem ipsum dolor sit amet
      </span>
                </label>
                <span class='date'>14 May 2013</span>
                <span class='circle'></span>
                <div class='content'>
                    <h3>Lorem ipsum dolor sit amet (14 May 2013)</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati nesciunt! Molestiae officiis voluptate excepturi rem veritatis eum aliquam qui laborum non ipsam ullam tempore reprehenderit illum eligendi cumque mollitia temporibus! Natus dicta qui est optio rerum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati nesciunt!
                    </p>
                </div>
            </li>
            <li class='entry'>
                <input class='radio' id='trigger2' name='trigger' type='radio'>
                <label for='trigger2'>
      <span>
        Lorem ipsum dolor sit amet
      </span>
                </label>
                <span class='date'>13 May 2013</span>
                <span class='circle'></span>
                <div class='content'>
                    <h3>Lorem ipsum dolor sit amet (13 May 2013)</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati nesciunt!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati nesciunt! Molestiae officiis voluptate excepturi rem veritatis eum aliquam qui laborum non ipsam ullam tempore reprehenderit illum eligendi cumque mollitia temporibus! Natus dicta qui est optio rerum.
                    </p>
                </div>
            </li>
            <li class='entry'>
                <input class='radio' id='trigger1' name='trigger' type='radio'>
                <label for='trigger1'>
      <span>
        Lorem ipsum dolor sit amet
      </span>
                </label>
                <span class='date'>12 May 2013</span>
                <span class='circle'></span>
                <div class='content'>
                    <h3>Lorem ipsum dolor sit amet (12 May 2013)</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati nesciunt! Molestiae officiis voluptate excepturi rem veritatis eum aliquam qui laborum non ipsam ullam tempore reprehenderit illum eligendi cumque mollitia temporibus! Natus dicta qui est optio rerum.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio ea necessitatibus quo velit natus cupiditate qui alias possimus ab praesentium nostrum quidem obcaecati nesciunt!
                    </p>
                </div>
            </li>
        </ul>
    @foreach($workExperiences as $experience )
            <ul class="timeline">
                <li>
                    <div class="timeline-content">
                            <section class="col-xs-12 col-md-3 yellow-sm">
                                <p class="pull-right text-sm">از</p>
                                <p class="pull-right text-sm">تا</p>
                                <p class="pull-right text-sm2">{{$experience->start_date}}</p>
                                <p class="pull-right text-sm2">{{$experience->finish_date}}</p>
                                <p class="pull-right text-sm2">{{$experience->company}}</p>
                                <p class="pull-right text-sm3">{{$experience->city}}</p>
                            </section>
                            <section class="col-xs-12 col-md-8 yellow-lg">
                                <h2 class="pull-right text-lg1">{{$experience->title}}</h2>
                                <p class="pull-right text-justify text-lg2 mCustomScrollbar content-a2" data-mcs-theme="minimal-dark">
                                    {{$experience->about}}
                                </p>
                            </section>
                    </div>
                </li>
            </ul>
                    @endforeach
    </section>
</main>
@endif