function ProgramCard({ program, onClick }) {
  return (
    <div onClick={() => onClick(program)} style={{border:"1px solid gray", padding:10}}>
      <h3>{program.code}</h3>
      <p>{program.name}</p>
      <p>{program.duration}</p>
      <p>Status: {program.status}</p>
    </div>
  );
}

export default ProgramCard;