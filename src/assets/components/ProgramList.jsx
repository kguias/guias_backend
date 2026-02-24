import { useState } from "react";
import programs from "../data/programs";
import ProgramCard from "./ProgramCard";
import ProgramDetails from "./ProgramDetails";

function ProgramList() {
  const [selected, setSelected] = useState(null);

  return (
    <div>
      <h2>Programs</h2>

      {!selected && programs.map(p => (
        <ProgramCard key={p.code} program={p} onClick={setSelected}/>
      ))}

      {selected && (
        <ProgramDetails program={selected} onBack={()=>setSelected(null)}/>
      )}
    </div>
  );
}

export default ProgramList;