import { createBrowserRouter } from "react-router-dom";
import Layout from "../utils/Layout.jsx";
import Home from "../components/Home.jsx";
import Login from "../components/recruiters/Login.jsx";
import Dashboard from "../components/recruiters/Dashboard.jsx";


export const LOGIN_ROUTE = '/login'
const ADMIN_BASE_ROUTE = '/admin'
const RECRUTEUR_BASE_ROUTE = '/recruteur'
export const ADMIN_DASHBOARD_ROUTE = ADMIN_BASE_ROUTE + '/dashboard'
export const RECRUTEUR_DASHBOARD_ROUTE = RECRUTEUR_BASE_ROUTE + '/dashboard'
export const redirectToDashboard = (roleType) => {
  switch (roleType) {
    case 'admin':
      return (ADMIN_DASHBOARD_ROUTE)
    case 'recruteur':
      return (RECRUTEUR_DASHBOARD_ROUTE)
  }
}
export const router = createBrowserRouter([
  {
    element: <Layout />,
    children: [
      { path: '/', element: <Home />},
      { path: '/login', element: <Login />},
      { path: RECRUTEUR_DASHBOARD_ROUTE, element: <Dashboard />}
    ]
  }
])