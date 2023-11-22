// app/hooks/simpleAuth.js
"use client"; // Make sure to include this line

import { useEffect, useState } from "react";
import my_axios from "@/lib/axios";

export const useSimpleAuth = () => {
  const [user, setUser] = useState(null);
  const [error, setError] = useState(null);

  useEffect(() => {
    const fetchUser = async () => {
      try {
        const response = await my_axios.get("/api/user");
        setUser(response.data);
      } catch (error) {
        console.error("Error fetching user:", error);
        setError(error);
      }
    };

    fetchUser();
  }, []);

  return { user, error };
};
