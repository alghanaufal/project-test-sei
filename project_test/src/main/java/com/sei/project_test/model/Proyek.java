package com.sei.project_test.model;

import lombok.Data;

import jakarta.persistence.*;

import java.sql.Date;
import java.time.LocalDateTime;
import java.util.List;

@Entity
@Data
public class Proyek {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Integer id;
    private String namaProyek;
    private String client;
    private Date tglMulai;
    private Date tglSelesai;
    private String pimpinanProyek;
    private String keterangan;
    private LocalDateTime createdAt;

    @ManyToMany
    @JoinTable(
        name = "proyek_lokasi",
        joinColumns = @JoinColumn(name = "proyek_id"),
        inverseJoinColumns = @JoinColumn(name = "lokasi_id")
    )
    private List<Lokasi> lokasi;

    @PrePersist
    protected void onCreate() {
        this.createdAt = LocalDateTime.now();
    }
}
