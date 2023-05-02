import { useState } from "react";
import axios from "axios";

function ACMusic()
{
    const [songUrl, setCurrentSong] = useState();
    
    function getCurrentHour()
    {
        const date = new Date();
        return date.getHours();
    }
    
    // Make API call
    function getBackgroundSong()
    {
        axios.get("https://acnhapi.com/v1/backgroundmusic")
            .then(response => {
                getCurrentSong(response.data, getCurrentHour())
            })
            .catch(error => {
                console.error(error);
            });
    }

    // Get current song based on hour in real time
    function getCurrentSong(songsJson, currentHour)
    {
        // Create songString to find the correct song in the songsJson
        // If the currentHour is 10 or higher, just use the currentHour
        // Otherwise, use the hour with a 0 in front of it.
        let songString = "BGM_24Hour_" + 
                        (currentHour >= 10 ? currentHour : "0" + currentHour) +
                        "_Sunny";
        
        setCurrentSong(songsJson[songString].music_uri);
    }

    return (
        <div className="ac-music">
            <button className="ac-music-button" onClick={getBackgroundSong}>Play Current (Sunny) AC:NH Song</button>
            
            <br />
        
            <audio controls src={songUrl}></audio>
        </div>
    );

}

export default ACMusic;