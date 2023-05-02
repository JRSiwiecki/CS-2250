import React from "react";
import "./App.css";
import Header from "./components/Header";
import ACVillager from "./components/ACVillager";
import ACMusic from "./components/ACMusic";

const App = () => {
  return (
    <div className="App">
      <Header />
      <ACVillager />
      <ACMusic />
    </div>
  );
};

export default App;
