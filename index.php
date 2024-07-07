<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информационная безопасность</title>
    <link rel="stylesheet" href="css/style.css?<?echo time();?>">
    <script src="js/script.js" defer></script>
</head>
<body>
    <div class="wrapper" id="b1">
        <img src="img/киануривз 1.svg" alt="">
        
        <?php require_once "blocks/header.php" ?>

        <div class="hero container">
            <div class="hero--info">
                <h1>Какой то текст об <span class="colortext">информационной безопасности</span></h1>
                <h2>Какая то крутая подпись об информационной безопасности</h2>
            </div>
        </div>
    </div> 

    <div class="trending" id="b2">
        <div class="container">
            <img src="img/left.svg" class="left">
                <div class="trending-info">
                    <h1><span class="colortext">Цель</span> информационной безопасности</h1>
                    <p>Защитить информационные данные от стороннего вмешательства, 
                    что может стать причиной потери данных. Информационная 
                    безопасность помогает обеспечить непрерывность бизнеса.</p>
                </div>
            <img src="img/right.svg" class="right">
        </div>
    </div>

    <div class="people" id="b3">
        <h1>Выдающиеся люди</h1>
            <div class="tab">
                <input checked id="tab-btn-1" name="tab-btn" type="radio" value="">
                <label for="tab-btn-1">pashok</label>
                <input id="tab-btn-2" name="tab-btn" type="radio" value="">
                <label for="tab-btn-2">pashok</label>
                <input id="tab-btn-3" name="tab-btn" type="radio" value="">
                <label for="tab-btn-3">pashok</label>
                <input id="tab-btn-4" name="tab-btn" type="radio" value="">
                <label for="tab-btn-4">pashok</label>
                <div class="rectangle"></div>
                <div class="tab-content" id="content-1">
                    <div class="kaspersky">
                        <img src="img/kaspersky.png" alt="">
                        <div class="kaspersky-info">
                            <h2>Евгений Касперский</h2>
                            <p>Российский программист, один из ведущих мировых специалистов 
                            в сфере информационной безопасности. Один из основателей, 
                            основной владелец и нынешний глава АО «Лаборатория Касперского» — 
                            международной компании, занимающейся разработкой решений для 
                            обеспечения IT-безопасности, имеющей более 30 региональных офисов 
                            и ведущей продажи в 200 странах. Лауреат Государственной 
                            премии в области науки и технологий за 2008 год.</p>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="content-2">
                    <div class="kaspersky">
                        <img src="img/kaspersky.png" alt="">
                        <div class="kaspersky-info">
                            <h2>Евгений Касперский</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum magnam exercitationem itaque enim expedita, fugiat laudantium dolor illum ad reiciendis quo unde quam aut ullam, praesentium quod quis tempore cumque?</p>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="content-3">
                    <div class="kaspersky">
                        <img src="img/kaspersky.png" alt="">
                        <div class="kaspersky-info">
                            <h2>Евгений Касперский</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque temporibus laudantium velit laboriosam molestias unde molestiae aut harum. Dignissimos, veritatis voluptates. Dolorem commodi ipsa quasi inventore facilis excepturi soluta quisquam.</p>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="content-4">
                    <div class="kaspersky">
                        <img src="img/kaspersky.png" alt="">
                        <div class="kaspersky-info">
                            <h2>Евгений Касперский</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum omnis ipsa illo fuga! Ea quas officia velit fuga iure aut incidunt magni consequatur, dolorum sequi cumque dolores labore nemo corporis.</p>
                        </div>
                    </div>
              </div>
        </div>
    </div>

    <div class="questions people" id="b4">
        <div class="quest">
            <h3> Вопрос - ответ </h3>
            <div class="rectangle"></div>
        </div>
        <div class="menu">
            <div class="dropdown-btn">
                <p> Кто такой хакер? </p>
                <svg class='arrow' width="33" height="20" viewBox="0 0 33 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.4323 16.2162L28.6485 20L16.2161 7.56757L3.78366 20L-0.00012207 16.2162L16.2161 0L32.4323 16.2162Z" fill="white"/>
                </svg>
            </div>
              <div class="dropdown-container">
                <p>
                    Человек, превосходно разбирающийся в устройстве и 
                    функционировании вычислительных систем, 
                    умеющий быстро найти и элегантно устранить 
                    ошибки в их работе. Однако сейчас этим словом 
                    также обозначают киберпреступника, который с 
                    помощью высоких технических знаний и навыков 
                    взламывает информационные системы, с корыстными 
                    или иными целями.
                </p>
              </div>
        </div>

        <div class="menu">
            <div class="dropdown-btn">
                <p> Lorem ipsum dolor sit amet. </p>
                <svg class='arrow' width="33" height="20" viewBox="0 0 33 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.4323 16.2162L28.6485 20L16.2161 7.56757L3.78366 20L-0.00012207 16.2162L16.2161 0L32.4323 16.2162Z" fill="white"/>
                </svg>
            </div>
              <div class="dropdown-container">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet excepturi cumque a ut consequuntur neque repudiandae maiores labore pariatur at.
                </p>
              </div>
        </div>

        <div class="menu">
            <div class="dropdown-btn">
                <p> Lorem ipsum dolor sit amet. </p>
                <svg class='arrow' width="33" height="20" viewBox="0 0 33 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.4323 16.2162L28.6485 20L16.2161 7.56757L3.78366 20L-0.00012207 16.2162L16.2161 0L32.4323 16.2162Z" fill="white"/>
                </svg>
            </div>
              <div class="dropdown-container">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam quidem consequatur vero vitae eligendi facilis molestiae dicta animi, veniam odit labore quas cumque. Sed eius enim, ipsam voluptate distinctio debitis.
                </p>
              </div>
        </div>

        <div class="menu">
            <div class="dropdown-btn">
                <p> Lorem ipsum dolor sit amet. </p>
                <svg class='arrow' width="33" height="20" viewBox="0 0 33 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.4323 16.2162L28.6485 20L16.2161 7.56757L3.78366 20L-0.00012207 16.2162L16.2161 0L32.4323 16.2162Z" fill="white"/>
                </svg>
            </div>
              <div class="dropdown-container">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur unde excepturi, vero quo enim facilis voluptas, eius consectetur optio totam et, nobis dolorum qui voluptates commodi ad delectus! Magnam, quos.
                </p>
              </div>
        </div>

        <div class="menu">
            <div class="dropdown-btn">
                <p> Lorem ipsum dolor sit amet. </p>
                <svg class='arrow' width="33" height="20" viewBox="0 0 33 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.4323 16.2162L28.6485 20L16.2161 7.56757L3.78366 20L-0.00012207 16.2162L16.2161 0L32.4323 16.2162Z" fill="white"/>
                </svg>
            </div>
              <div class="dropdown-container">
                <p>
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto incidunt atque in sunt dolorum, autem reprehenderit nemo mollitia veritatis cupiditate. Recusandae provident rerum, sequi voluptatem quae exercitationem ipsa quisquam reiciendis.
                </p>
              </div>
        </div>

        <div class="menu">
            <div class="dropdown-btn">
                <p> Lorem ipsum dolor sit amet. </p>
                <svg class='arrow' width="33" height="20" viewBox="0 0 33 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.4323 16.2162L28.6485 20L16.2161 7.56757L3.78366 20L-0.00012207 16.2162L16.2161 0L32.4323 16.2162Z" fill="white"/>
                </svg>
            </div>
              <div class="dropdown-container">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto blanditiis quis possimus aperiam facilis? Fuga officia debitis, ipsum eaque quam, quas earum sit, aliquid impedit iusto magnam beatae quo id!
                </p>
              </div>
        </div>
    </div>

    <?php require_once "blocks/footer.php" ?>
</body>
</html>