<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive videos</title>

    <style>
        .outer-container {
        width: 100%;
        height: 100%;
        text-align: center;
        }
        .inner-container {
            border: 1px solid black;
            display: inline-block;
            position: relative;
        }
        .video-overlay {
            position: absolute;
            left: -11px;
            top: -11px;
            margin: 10px;
            width: 99%;
            height: 99%;
            padding: 5px 5px;
            font-size: 20px;
            font-family: Helvetica;
            text-align: left;
            color: rgb(3, 3, 3);
            background-color: rgb(4, 49, 252);
            z-index: 2;
        }

        video {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="outer-container">
        <div id="vid_div" class="inner-container">

            {{-- IF Video has any mcqs --}}
            @if($video->MCQ)
                @foreach($video->MCQ as $key => $mcq)
                    <div id="mcq" style="display: none;" class="video-overlay">
                        <div style="margin-top:75px; margin-left:30px">
                            {{ $mcq->question }}
                            <p id="correctAnswer" style="display: none">{{ $mcq->correct_answer }}</p> 
                            <div id="answer">

                                <input id="option1" type="radio" name="answer" onclick="checkAnswer1()" value="{{ $mcq->options[0] }}"> 
                                <label for="">{{ $mcq->options[0] }}</label><br>

                                <input id="option2" type="radio" name="answer" onclick="checkAnswer2()" value="{{ $mcq->options[1] }}">
                                <label for="">{{ $mcq->options[1] }}</label><br>

                                <input id="option3" type="radio" name="answer" onclick="checkAnswer3()" value="{{ $mcq->options[2] }}">
                                <label for="">{{ $mcq->options[2] }}</label><br>

                                <input id="option4" type="radio" name="answer" onclick="checkAnswer4()" value="{{ $mcq->options[3] }}">
                                <label for="">{{ $mcq->options[3] }}</label><br>
                            </div><br>
                    
                            <p id="show_answer" style="display: none"></p>

                            <button id="submit" style="display:none;" onclick="submitQuiz()">Continue</button>
                        </div> 
                    </div>
                @endforeach
            @endif

            {{-- IF Video has any blanks --}}
            @if($video->Blank)
                @foreach($video->Blank as $key => $blank)
                    <div id="blank{{$key}}" style="display: none;" class="video-overlay">
                        <div style="margin-top:75px; margin-left:30px">
                            {{ $blank->question }}
                            <p id="correctAnswer" style="display: none">{{ $blank->correct_answer }}</p> 
                            <div id="answer">

                                <input id="option1" type="radio" name="answer" onclick="checkAnswer1()" value="{{ $mcq->options[0] }}"> 
                                <label for="">{{ $blank->options[0] }}</label><br>

                                <input id="option2" type="radio" name="answer" onclick="checkAnswer2()" value="{{ $mcq->options[1] }}">
                                <label for="">{{ $blank->options[1] }}</label><br>

                                <input id="option3" type="radio" name="answer" onclick="checkAnswer3()" value="{{ $mcq->options[2] }}">
                                <label for="">{{ $blank->options[2] }}</label><br>

                                <input id="option4" type="radio" name="answer" onclick="checkAnswer4()" value="{{ $mcq->options[3] }}">
                                <label for="">{{ $blank->options[3] }}</label><br>
                            </div><br>
                    
                            <p id="show_answer" style="display: none"></p>

                            <button id="submit" style="display:none;" onclick="submitQuiz()">Continue</button>
                        </div> 
                    </div>
                @endforeach
            @endif

            {{-- IF Video has any True False --}}
            @if($video->TrueFalse)
                @foreach($video->TrueFalse as $key => $tf)
                    <div id="tf{{$key}}" style="display: none;" class="video-overlay">
                        <div style="margin-top:75px; margin-left:30px">
                            {{ $tf->question }}
                            <p id="correctAnswer" style="display: none">{{ $tf->correct_answer }}</p> 
                            <div id="answer">

                                <input id="option1" type="radio" name="answer" onclick="checkAnswer1()" value="{{ $mcq->options[0] }}"> 
                                <label for="">{{ $tf->options[0] }}</label><br>

                                <input id="option2" type="radio" name="answer" onclick="checkAnswer2()" value="{{ $mcq->options[1] }}">
                                <label for="">{{ $tf->options[1] }}</label><br>

                                <input id="option3" type="radio" name="answer" onclick="checkAnswer3()" value="{{ $mcq->options[2] }}">
                                <label for="">{{ $tf->options[2] }}</label><br>

                                <input id="option4" type="radio" name="answer" onclick="checkAnswer4()" value="{{ $mcq->options[3] }}">
                                <label for="">{{ $tf->options[3] }}</label><br>
                            </div><br>
                    
                            <p id="show_answer" style="display: none"></p>

                            <button id="submit" style="display:none;" onclick="submitQuiz()">Continue</button>
                        </div> 
                    </div>
                @endforeach
            @endif

            <video id="video" width="900" height="500" controls autoplay muted>
                <source src="{{ asset('media/'.$mcq->video->video) }}" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>


    <script>
    
/**************************************************************************** Start OF First MCQ **************************************************************************************************************************/
        

        function pauseVid(){
            if(this.currentTime >= 0.5 * 60) {
                this.pause();
                // document.getElementById("video").style.display = "none";
                document.getElementById("mcq").style.display = "block";
            }
        }

        video.addEventListener("timeupdate", pauseVid, false);


        //Checking option 1
        function checkAnswer1() {
        
            video.removeEventListener("timeupdate", pauseVid);


            //show the continue button
            document.getElementById("submit").style.display = "inline"

            
            if(document.getElementById("option1").value == document.getElementById("correctAnswer").innerHTML)
            {
                document.getElementById("show_answer").style.display = "inline";
                document.getElementById("show_answer").innerHTML = "Correct Answer";
            }
            else
            {
                document.getElementById("show_answer").style.display = "inline";
                document.getElementById("show_answer").innerHTML = "Wrong Answer | Correct Answer: "+document.getElementById("correctAnswer").innerHTML;
            }
        }


        //Checking option 2
        function checkAnswer2() {
        
            video.removeEventListener("timeupdate", pauseVid);


            //show the continue button
            document.getElementById("submit").style.display = "inline"

            
            if(document.getElementById("option2").value == document.getElementById("correctAnswer").innerHTML)
            {
                document.getElementById("show_answer").style.display = "inline";
                document.getElementById("show_answer").innerHTML = "Correct Answer";
            }
            else
            {
                document.getElementById("show_answer").style.display = "inline";
                document.getElementById("show_answer").innerHTML = "Wrong Answer | Correct Answer: "+document.getElementById("correctAnswer").innerHTML;
            }
        }


        //Checking option 3
        function checkAnswer3() {
        
            video.removeEventListener("timeupdate", pauseVid);


            //show the continue button
            document.getElementById("submit").style.display = "inline"

            
            if(document.getElementById("option3").value == document.getElementById("correctAnswer").innerHTML)
            {
                document.getElementById("show_answer").style.display = "inline";
                document.getElementById("show_answer").innerHTML = "Correct Answer";
            }
            else
            {
                document.getElementById("show_answer").style.display = "inline";
                document.getElementById("show_answer").innerHTML = "Wrong Answer | Correct Answer: "+document.getElementById("correctAnswer").innerHTML;
            }
        }


        //Checking option 4
        function checkAnswer4() {
        
            video.removeEventListener("timeupdate", pauseVid);


            //show the continue button
            document.getElementById("submit").style.display = "inline"

            
            if(document.getElementById("option4").value == document.getElementById("correctAnswer").innerHTML)
            {
                document.getElementById("show_answer").style.display = "inline";
                document.getElementById("show_answer").innerHTML = "Correct Answer";
            }
            else
            {
                document.getElementById("show_answer").style.display = "inline";
                document.getElementById("show_answer").innerHTML = "Wrong Answer | Correct Answer: "+document.getElementById("correctAnswer").innerHTML;
            }
        }




        function submitQuiz() {
            document.getElementById("mcq").style.display = "none";
            // document.getElementById("video").style.display = "block";

            
            seekTime = video.currentTime+0.1;
            if(seekTime > video.currentTime){
                video.play();
            }
        }


/**************************************************************************** END OF First MCQ **************************************************************************************************************************/


    </script>
</body>
</html>