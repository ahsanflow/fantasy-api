"use client";
import { useAuth } from "@/hooks/auth";
import React from "react";

export default function page() {
    const { user } = useAuth({ middleware: "auth" });
    return <div>page</div>;
}
