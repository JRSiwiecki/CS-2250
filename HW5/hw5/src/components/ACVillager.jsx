import { useState } from "react";
import axios from "axios";

function ACVillager()
{
    const [villagerName, setVillagerName] = useState(0);
    const [villagerImgUrl, setVillagerImgUrl] = useState(0);

    // Villager IDs in Animal Crossing are 1 - 391
    function getRandomVillagerID()
    {
        let end = 391;
        
        return Math.floor(Math.random() * end) + 1;
    }
    
    function getRandomVillager()
    {
        axios.get("https://acnhapi.com/v1/villagers/" + getRandomVillagerID())
            .then(response => {
                let villager = response.data;
                setVillagerName(villager.name["name-USen"]);
                setVillagerImgUrl(villager.image_uri);
            })
            .catch(error => {
                console.error(error);
            });
    }

    return (
        <div className="ac-villager">
            <h2 className="ac-villager-name">{villagerName}</h2>
            <img className="ac-villager-img" src={villagerImgUrl} alt="" />
            <br />
            <button onClick={getRandomVillager}>Get Random Villager</button>
        </div>
    );
}

export default ACVillager;