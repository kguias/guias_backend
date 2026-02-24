function SubjectCard({ subject, onClick }) {
  return (
    <div onClick={() => onClick(subject)} style={{border:"1px solid gray", padding:10}}>
      <h4>{subject.code}</h4>
      <p>{subject.title}</p>
      <p>{subject.units} units</p>
      <p>{subject.termType}</p>
    </div>
  );
}

export default SubjectCard;