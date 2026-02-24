function ProgramDetails({ program, onBack }) {
  return (
    <div>
      <button onClick={onBack}>Back</button>

      <h2>{program.name}</h2>
      <p>Code: {program.code}</p>
      <p>Duration: {program.duration}</p>
      <p>Total Units: {program.units}</p>

      <h3>Subjects per Year</h3>
      {Object.entries(program.years).map(([year, subs]) => (
        <div key={year}>
          <strong>{year}</strong>
          <ul>
            {subs.map(s => <li key={s}>{s}</li>)}
          </ul>
        </div>
      ))}
      <hr/>
    </div>
  );
}

export default ProgramDetails;