<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/style/style.css">
        
    </head>
    <body class="antialiased">
 @if (session()->has('task'))
    <p class='welcome'>{{ session('task')}}</p>
 @endif
    

        <form method='POST' action="/" class="register-form">  
               @csrf
            <fieldset>
                <label for="name" class="name">
                    Onoma
                </label>
                <input type="text" id="name" name="name" value="{{old('name')}}" placeholder="Your Name" >
                @error('name')
                <p class="error">{{$message}}</p>
                @enderror
            </fieldset>
            <fieldset>
                <label for="epwnymo" class="lname">
                    Epwnymo
                </label>
                <input type="text" id="epwnymo" name="epwnymo" value="{{ old('epwnymo') }}" placeholder="Your Last Name">
                @error('epwnymo')
                <p class="error">{{$message}}</p>
                @enderror
            </fieldset>
            <fieldset>
                <label for="tel" class="tel">Phone</label>
                <!-- Todo html validation -->
                <input type="tel" id="tel" name="tel" placeholder="Your telephone" value="{{ old('tel') }}" >
                @error('tel')
                 <p class="error">{{$message}}</p>
                @enderror
            </fieldset>
            <fieldset class='country'>
                <div style="    display: flex;
    justify-content: center;"  >
                <label for='country' class="country-style" >Pou meneis? </label>
                </div>
  
                    <select name="country"  id='country'>
                        <option value=""> &nbsp; &nbsp; Dialekse ena apo ta parakatw &nbsp; &nbsp; </option>
                        <option value='athens'>Athens</option>
                        <option value='thessalonikh'>Thessalonikh</option>
                        <option value='patra'>Patra</option>
                        <option value='allo'>Allo</option>
                    </select>
                    @error('country')
                    <p class="error">{{$message}}</p>
                @enderror
            </fieldset>
            <fieldset class='interest'>
                <legend class='legend'>Endiaferese gia:</legend>
                <div>
                <div>
                    <input type="radio" id="sxesh" name="interest" value="sxesh" checked>
                    <label for="sxesh">Sxesh</label>
                </div>
                <div>
                    <input type="radio" id="diazygio" name="interest" value="diazygio">
                    <label for="diazygio">Diazygio</label>
                </div>
                <div>
                    <input type="radio" id="mynhsh" name="interest" value="mynhsh">
                    <label for="mynhsh">Mynhsh</label>
                </div>
                <div>
                    <input type="radio" id="complicated" name="interest" value="complicated">
                    <label for="complicated">Complicated</label>
                </div>
            </fieldset>
            <fieldset>
                    <label for="story" class="story">Pes mas gia sena:</label>
                
                    <textarea id="story" name="story"
                        rows="5" cols="33">
                        
                    </textarea>
                    @error('story')
                 <p class="error">{{$message}}</p>
            @enderror
          </fieldset>
        
          <button class='button-submit-unique' type="submit" >Submit</button>
        </form>
        <script src='/js/index.js'></script>
    </body>
</html>
