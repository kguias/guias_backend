import Dashboard from "./components/Dashboard.jsx";
import ProgramList from "./components/ProgramList.jsx";
import SubjectList from "./components/SubjectList.jsx";

function App() {
  return (
    <div style={{padding:20}}>
      <h1>Enrollment System</h1>

      <Dashboard />
      <ProgramList />
      <SubjectList />
    </div>
  );
}

export default App;