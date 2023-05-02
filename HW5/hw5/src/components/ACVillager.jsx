import { useState } from "react";
import axios from "axios";

function ACVillager()
{
    // need useState hook to track villager data
    const [villagerName, setVillagerName] = useState();
    const [villagerImgUrl, setVillagerImgUrl] = useState();
    const [villagerPhrase, setVillagerPhrase] = useState();

    // Villager IDs in Animal Crossing are 1 - 391
    function getRandomVillagerID()
    {
        let end = 391;
        
        return Math.floor(Math.random() * end) + 1;
    }
    
    // Make API call
    function getRandomVillager()
    {
        axios.get("https://acnhapi.com/v1/villagers/" + getRandomVillagerID())
            .then(response => {
                let villager = response.data;
                setVillagerName(villager.name["name-USen"]);
                setVillagerImgUrl(villager.image_uri);
                setVillagerPhrase(villager.saying);
            })
            .catch(error => {
                console.error(error);
            });
    }

    return (
        <div className="ac-villager">
            <button className="ac-villager-button" onClick={getRandomVillager}>Get Random Villager</button>
            <h2 className="ac-villager-name">{villagerName}</h2>
            <img className="ac-villager-img" src={villagerImgUrl} alt="" />
            <p className="ac-villager-phrase">{villagerPhrase}</p>
        </div>
    );
}

export default ACVillager;