<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="/css/override.css">
        
    </head>
    <body>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                  </button>
                  <a id="nav_logo" class="navbar-brand" href="/">Company Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul id="nav_links" class="nav navbar-nav navbar-right">
                      <li class=""><a href="/">Home</a></li>
                      <li class=""><a href="/services">Services</a></li>
                      <li class=""><a href="/login">Login</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>

        <div class="jumbotron jumbotron-fluid">

        <video autoplay muted loop poster="https://dummyimage.com/900x400/000/fff">    
            <source src="" data-src="https://www.w3schools.com/howto/rain.mp4" type="video/mp4">
           <!--  <source src="" data-src="https://www.youtube.com/watch?v=F1B9Fk_SgI0&list=RDMMF1B9Fk_SgI0&start_radio=1" type="video/webm">
            <source src="" data-src="https://www.youtube.com/watch?v=F1B9Fk_SgI0&list=RDMMF1B9Fk_SgI0&start_radio=1" type="video/ogg"> -->
        </video>

          <div class="container text-white">

            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button" data-toggle="modal" data-target="#exampleModalLong">Learn more</a>

          </div>
          <!-- /.container -->
        </div>
        <!-- /.jumbotron -->

        <div class="row">
            <div class="content_1">
                <div class="container">
                    <div class="col-lg-12">
                        <h2>What is Lorem Ipsum?</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
             <div class="content_2">
                 <div class="container">
                     <div class="col-lg-6">
                         <h3>Why do we use it?</h3>
                         <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                     </div>

                     <div class="col-lg-6">
                         <h3>Where does it come from?</h3>
                         <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p><br>

                         <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                     </div>
                 </div>
             </div>
        </div>

        <div class="row">
            <div class="content_3">
                <div class="container">
                    <div class="col-md-3">
                        <h4>The standard Lorem Ipsum passage, used since the 1500s</h4>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                    <div class="col-md-3">
                        <h4>Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h4>
                        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                    </div>
                    <div class="col-md-3">
                        <h4>1914 translation by H. Rackham</h4>
                        <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man</p>
                    </div>
                    <div class="col-md-3">
                       <h4>Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h4>
                       <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p> 
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="content_4">
                <div class="banner">
                     <div class="container">
                         <div class="col-lg-12">
                             <h2>1914 translation by H. Rackham</h2>
                             <p>"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."
                            </p>
                            <button id="banner_btn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Click Here</button>
                         </div>
                     </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Lorem Ipsum</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac aliquam enim. Donec efficitur enim tellus, a scelerisque elit sollicitudin sit amet. Suspendisse eu ullamcorper nulla. Vivamus id imperdiet magna, eu ornare leo. Nulla facilisis in justo aliquet dignissim. Fusce leo dolor, lobortis in velit eget, placerat congue magna. Suspendisse egestas risus at dapibus commodo. Suspendisse potenti. Vivamus sed magna tempor, convallis eros tincidunt, efficitur augue. Suspendisse laoreet bibendum augue ac imperdiet. Sed facilisis lorem nec est pretium ultrices. Cras posuere a arcu tristique dapibus. In volutpat augue sit amet dolor faucibus, vel feugiat purus tristique. Phasellus vulputate mi id lacus aliquam, a bibendum tellus venenatis. Sed sit amet gravida nisi. Proin porta, lacus in laoreet congue, libero lacus aliquam dui, nec ullamcorper justo velit et purus.</p>
                    <p>Donec tempus ex a mi condimentum, nec auctor est elementum. Mauris commodo laoreet risus, ut suscipit metus pretium sit amet. Sed at nisi bibendum, tempor mauris nec, consectetur dolor. Etiam imperdiet purus a leo maximus scelerisque. Nam egestas bibendum elementum. Fusce at dui lacus. Nam faucibus ex sit amet urna luctus sodales. Duis turpis justo, sagittis sit amet diam ac, lobortis ultrices enim. Nunc quis ante fringilla ex suscipit ultricies eu vitae dui. Nulla tincidunt, nisl nec facilisis ornare, lorem ipsum porttitor nulla, sit amet vehicula purus augue nec quam. Nulla facilisi. Sed a posuere dui. In vel libero mi. Donec lacinia lectus non vestibulum vulputate. Fusce ultricies leo non tellus ultrices, in maximus arcu semper.</p>
                    <p>Curabitur molestie dui a mi finibus, id vehicula sapien posuere. Curabitur gravida nibh urna, at imperdiet elit tempor sit amet. Vestibulum sit amet ligula ut velit tempor feugiat in quis diam. Praesent pulvinar lacus ullamcorper lacus pretium hendrerit sed id nisl. Nam pretium ut magna non commodo. Quisque quis maximus tortor. Proin vel urna id sem porta consectetur. Donec nisl felis, consectetur ut orci aliquet, iaculis dapibus nisi. Nam gravida, neque et consectetur molestie, tortor dolor convallis tellus, eget placerat ligula magna a quam. Integer rutrum nisi venenatis quam sagittis, eget sagittis augue maximus. Quisque ut fringilla quam. Curabitur semper metus id nisl bibendum sollicitudin. Donec mauris ipsum, placerat a commodo rhoncus, porttitor quis mi. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    <p>Quisque nibh felis, sagittis eu faucibus sodales, consequat in metus. Fusce accumsan urna sed tellus tincidunt, vitae porttitor augue tempus. Maecenas vitae libero mollis, venenatis tellus at, aliquam dui. Duis consectetur metus id mi lacinia, et dapibus leo placerat. Vivamus ullamcorper erat neque, sed blandit dolor vestibulum eu. Nulla facilisi. Praesent eget elementum mauris, ac ullamcorper ipsum. Duis scelerisque odio arcu, sit amet semper mi fringilla nec. Praesent euismod dolor risus, sit amet tristique orci tempor in. Vivamus sit amet scelerisque urna. Praesent at risus diam.</p>
                    <p>Nulla consequat molestie dolor quis rhoncus. Aliquam erat volutpat. Phasellus a blandit mi. Nam vestibulum dictum mauris, at sodales diam semper eget. Sed posuere mi diam, bibendum efficitur dui pulvinar tristique. Sed luctus ornare finibus. Fusce eget tortor a enim pellentesque pretium. Proin eu pellentesque orci, ac posuere magna. Vivamus non dapibus ipsum. Fusce nec sollicitudin massa. Ut sed quam vehicula, euismod quam nec, tempus tortor. Cras euismod, elit sit amet pretium consectetur, lacus nibh pellentesque sem, vitae interdum velit est vel enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                 </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Company Logo</h4>
                            <p>Company Name</p>
                            <p>ipsum. Fusce nec sollicitudin massa. Ut sed quam vehicula, euismod quam nec, tempus tortor. Cras euismod, elit sit amet pretium consectetur, lacus nibh pellentesque sem, vitae interdum velit est vel enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="col-md-4">
                            <h4>1914 translation by H. Rackham</h4>
                            <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man</p>
                        </div>
                        <div class="col-md-4">
                            <h4>1914 translation by H. Rackham</h4>
                            <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man</p>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-md-12">
                             <p>Copyright © 2018 -2019 Sample Company Inc.</p>
                         </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
           $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
                $('.navbar').css('background-color','#fff');
                $('.navbar').css('transition','500ms ease');
                $('.navbar').css('box-shadow','0px 10px 20px #282828');
                $('#nav_logo').css('color','#000');
                $('#nav_logo').css('transition','500ms ease');
                $('#nav_links a').css('color','#000');
                $('#nav_links a').css('transition','500ms ease');
            }else{
                $('#nav_logo').css('color','#fff');
                $('#nav_links a').css('color','#fff');
                $('.navbar').css('background-color','transparent');
                $('.navbar').css('box-shadow','none');
            }
           });
        </script>
        <script>
            function deferVideo() {

                //defer html5 video loading
              $("video source").each(function() {
                var sourceFile = $(this).attr("data-src");
                $(this).attr("src", sourceFile);
                var video = this.parentElement;
                video.load();
                // uncomment if video is not autoplay
                //video.play();
              });

            }
            window.onload = deferVideo;
        </script>
    </body>
</html>
