function SubjectDetails({ subject, onBack }) {
  return (
    <div>
      <button onClick={onBack}>Back</button>

      <h2>{subject.code} - {subject.title}</h2>
      <p>Units: {subject.units}</p>
      <p>Semester: {subject.semester}</p>
      <p>Program: {subject.program}</p>
      <p>Pre-req: {subject.prereq}</p>
      <p>Co-req: {subject.coreq}</p>
      <p>{subject.description}</p>
    </div>
  );
}

export default SubjectDetails;