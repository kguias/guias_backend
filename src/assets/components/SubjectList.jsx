import { useState } from "react";
import subjects from "../data/subjects.js";
import SubjectCard from "./SubjectCard.jsx";
import SubjectDetails from "./SubjectDetails.jsx";

function SubjectList() {
  const [selected, setSelected] = useState(null);

  return (
    <div>
      <h2>Subjects</h2>

      {!selected && subjects.map(s => (
        <SubjectCard key={s.code} subject={s} onClick={setSelected}/>
      ))}

      {selected && (
        <SubjectDetails subject={selected} onBack={()=>setSelected(null)}/>
      )}
    </div>
  );
}

export default SubjectList;