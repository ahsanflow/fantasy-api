"use client";
import { useAuth } from "@/hooks/auth";
import my_axios from "@/lib/axios";
import { useEffect } from "react";
import { useState } from "react";
import DashboardLayout from "./layouts/dashboard/DashboardLayout";
export default function Home() {
    const { user } = useAuth({ middleware: "guest" });
    const [userData, setUserData] = useState(null);
    const [loading, setLoading] = useState(true);

    //   useEffect(() => {
    //     const fetchUserData = async () => {
    //       try {
    //         const response = await my_axios.get("/api/users");
    //         setUserData(response.data);
    //         console.log("User Data:", response.data);
    //       } catch (error) {
    //         console.error("Error fetching user data:", error);
    //       } finally {
    //         setLoading(false);
    //       }
    //     };

    //     fetchUserData();
    //   }, []);
    return (
        // <div className="container py-4">
        //   <main className={`main`}>
        //     <h2>Hello World!</h2>
        //     {/* {testVariable} */}
        //     {/* {user ? "hi" : "bye"} */}
        //     {/* {user ? <p>Welcome, {user.username}!</p> : <p>Loading...</p>} */}
        //   </main>
        // </div>

        <h2>Hello World</h2>
    );
}
