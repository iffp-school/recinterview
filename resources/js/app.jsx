import React from 'react';
import { createRoot } from 'react-dom/client';
import App from './components/App';
import '../css/app.css'; // Assurez-vous que ce fichier existe

const container = document.getElementById('react-app');
if (container) {
  const root = createRoot(container);
  root.render(<App />);
}
